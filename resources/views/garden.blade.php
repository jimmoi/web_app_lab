<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family : monospace;
            font-size : 1.25em;
        }


        #container {
            display : flex;
            justify-content : center;
        }

        .roster table, th, td{
            border : 1px dashed black;
            border-collapse : collapse;
        }

        .roster td {
             padding: 0px 3px;
            text-align:left;
        }

    </style>
</head>
<body>
    <h1 style="color:rgba(26, 231, 50, 1); text-decoration:underline; text-align:center;">Garden Management</h1>
    <div class="roster" id="container">
        <table>
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
    </div>
</body>
</html>