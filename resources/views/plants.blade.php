<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td, th {
            text-align: left;
            padding: 10px;
        }

        .plant_table {
            font-family: monospace;
            font-size: 1.25em;
            border-collapse: collapse;
        }

        #table_head {
            border: 2px solid black;
        }

        .odd {
            background-color: white;
        }

        .even {
            background-color: rgba(226, 226, 226, 1);
        }
    </style>
</head>
<body>
    <h1 style="color:rgba(26, 231, 50, 1); text-decoration:underline; text-align: center;">List of Plants</h1>
    <div style="max-width: fit-content; margin-inline: auto;">
        <table class = "plant_table">
            <tr id = "table_head">
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
                    $group = ($count%2 == 0) ? "even":"odd";
                    echo
                    "<tr class={$group}>
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
    </div>
</body>
</html>