<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Plant</h1>
    <form action="{{route('add_plant')}}" method="post">
        @csrf
        <p>Plant Name: <input name = "plant_name" type="text"></p>
        <p>Scientific Name: <input name = "sci_name" type="text"></p>
        <p>Garden: 
            <select name="garden_id">
            @foreach($garden_data as $garden_row) 
                <option value="{{$garden_row->id}}">{{$garden_row->abbreviation}}</option>
            @endforeach
            </select>
        </p>
        <input type="submit" value="บันทึกข้อมูล">
    </form>
</body>
</html>