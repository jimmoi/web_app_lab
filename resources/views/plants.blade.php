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
    <h1 style="color:rgba(26, 231, 50, 1); text-decoration:underline;">List of Plants</h1>
    <table border = 1>
        <tr>
            <th>No.</th>
            <th>Plant Name</th>
            <th>Scientific Name</th>
            <th> Garden Name</th>
        </tr>
        <?php
        if (isset($plant_data)) {
            $count = 1;
            foreach ($plant_data as $data) {
                $plant_name = $data->plant_name;
                $scientific_name = $data->scientific_name;
                $garden_name = $data->garden->garden_name;
                echo
                "<tr>
                    <td>{$count}</td>
                    <td>{$plant_name}</td>
                    <td>{$scientific_name}</td>
                    <td>{$garden_name}</td>
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