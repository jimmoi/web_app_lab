<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <style>
        @import url({{asset("css/plants.css")}});
        body {font-family: "Dancing Script", cursive;}
    </style>
</head>
<body>
    <h1 id="list_plant_header">List of Plants</h1>
        <p><a href="{{route('add_plant_page')}}">Add Plant</a></p>
        <table border = 1 class="table table-dark table-striped">
            <tr class="table-info">
                <th>No.</th>
                <th>Plant Name</th>
                <th>Scientific Name</th>
                <th> Garden Name</th>
                <th>Action</th>
            </tr>
            <?php
            if (isset($plant_data)) {
                $count = 1;
                foreach ($plant_data as $data) {
                    $plant_id = $data->id;
                    $plant_name = $data->plant_name;
                    $scientific_name = $data->scientific_name;
                    $garden_name = $data->garden->garden_name;
                    $edit_url = route('plants.form', $plant_id);
                    $delete_url = route('plants.delete', $plant_id);
                    $test_string = 'return confirm("Are you sure")';
                    echo
                    "<tr>
                        <td>{$count}</td>
                        <td>{$plant_name}</td>
                        <td>{$scientific_name}</td>
                        <td>{$garden_name}</td>
                        <td><a class = 'text-warning'  href={$edit_url}>Edit</a> <a class = 'text-danger' href={$delete_url} onclick = '{$test_string}'>Delete</a></td>
                    </tr>";

                    $count += 1;
                }
            } else {
                echo "<tr><td colspan = 4>No data</td></tr>";
            }
                
            ?>
        </table>
</body>
</html>