<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 10px;
        }

        h1 {
            text-align: center;
        }

        /* Wrapper for small screens */
        .table-container {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 100%;
            min-width: 500px; /* prevents squishing */
        }

        td {
            text-align: center;
            border: 1px solid black;
            padding: 10px;
            font-weight: bold;
            width: 8%;
        }

        /* Colors */
        .blue { background-color: lightblue; }
        .red { background-color: red; color: white; }

        /* Tablet */
        @media (max-width: 768px) {
            td {
                padding: 8px;
                font-size: 14px;
            }
        }

        /* Mobile */
        @media (max-width: 480px) {
            td {
                padding: 6px;
                font-size: 12px;
            }

            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

<h1>Multiplication Table</h1>

<div class="table-container">
<table>
<?php
for ($row = 0; $row <= 9; $row++) {
    echo "<tr>";
    for ($col = 0; $col <= 10; $col++) {

        $result = $row * $col;

        if (($row + $col) % 2 == 0) {
            $color_class = "blue";
        } else {
            $color_class = "red";
        }

        echo "<td class='$color_class'>$result</td>";
    }
    echo "</tr>";
}
?>
</table>
</div>

</body>
</html>
``