<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            text-align : center;
        }

        body {
            font-family : monospace;
            font-size : 1.25em;
        }
    </style>
</head>
<body>
    <h1 style="color:rgba(26, 231, 50, 1); text-decoration:underline;">Garden Management</h1>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Garden Name</th>
            <th>Abbreviation</th>
            <th>location</th>
        </tr>
    
        @forelse($garden_data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->garden_name}}</td>
                <td class="abbreviation">{{$data->abbreviation}}</td>
                <td>{{$data->location}}</td>
            </tr>
        @empty
            <tr><td colspan=4>No data</td></tr>
        @endforelse
    </table>
</body>
</html>