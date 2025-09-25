<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url({{asset("css/plants.css")}});
    </style>
</head>
<body>
    @if ($form_mode == "create")
        <h1>Add Plant</h1>
        <form action="{{route('add_plant')}}" method="post">
            @csrf
            <p>Plant Name: <input class="create_input" name = "plant_name" type="text"></p>
            <p>Scientific Name: <input class="create_input" name = "sci_name" type="text"></p>
            <p>Garden: 
                <select class="create_input" name="garden_id">
                    <option disabled>-- select garden --</option>
                @foreach($garden_data as $garden_row) 
                    <option value="{{$garden_row->id}}">{{$garden_row->garden_name}}</option>
                @endforeach
                </select>
            </p>
            <input class="next_button" type="submit" value="Save Plant">
        </form>
    @elseif ($form_mode == "edit")
        <h1>Edit Plant</h1>
        <form action="{{route('edit_plant')}}" method="post">
            @csrf
            <p>Plant Name: <input class="edit_input" name = "plant_name" type="text" value="{{$edit_row->plant_name}}"></p>
            <p>Scientific Name: <input class="edit_input"name = "sci_name" type="text" value="{{$edit_row->scientific_name}}"></p>
            <p>Garden: 
                <select name="garden_id" class="edit_input">
                @foreach($garden_data as $garden_row)
                    @if ($garden_row->id == $edit_row->garden_id)
                        <option value="{{$garden_row->id}}" selected>{{$garden_row->garden_name}}</option>
                    @else
                        <option value="{{$garden_row->id}}">{{$garden_row->garden_name}}</option>
                    @endif
                @endforeach
                </select>
            </p>
            <input type="text" name = "plant_id" value="{{$plant_id}}" style="display:none">
            <input class="next_button" type="submit" value="Update Plant">
        </form>
    @endif
</body>
</html>