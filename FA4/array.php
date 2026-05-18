<?php
$names = array(
    "chrisa", "john doe", "mary ann", "peter parker", "bruce wayne",
    "clark kent", "diana prince", "tony stark", "steve rogers", "natasha romanoff",
    "wanda maximoff", "vision", "scott lang", "hope van dyne", "stephen strange",
    "tchalla", "shuri", "nick fury", "phil coulson", "loki laufeyson"
);

function replaceVowels($name) {
    return preg_replace('/[aeiouAEIOU]/', '@', $name);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>List of Names</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
            padding: 20px;
        }

        .container {
            width: 95%;
            margin: auto;
            background: #fff0f5;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(255, 105, 180, 0.2);
        }

        h2 {
            text-align: center;
            color: #d63384;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #ff69b4;
            color: black;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ffc0cb;
        }

        tr:nth-child(even) {
            background-color: #ffe4ec;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }

        tr:hover {
            background-color: #ffd6e8;
        }

        th {
            font-size: 14px;
        }

        td {
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>List of Names</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Number of Characters</th>
                <th>Uppercase First Character</th>
                <th>Replace Vowels (@)</th>
                <th>Position of "a"</th>
                <th>Reverse Name</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($names as $name): 
                
                $length = strlen($name);
                $ucName = ucfirst($name);
                $replaced = replaceVowels($name);
                $pos = strpos($name, 'a');
                $posDisplay = ($pos !== false) ? $pos + 1 : "Not found";
                $reverse = strrev($name);
            ?>

            <tr>
                <td><?= $name ?></td>
                <td><?= $length ?></td>
                <td><?= $ucName ?></td>
                <td><?= $replaced ?></td>
                <td><?= $posDisplay ?></td>
                <td><?= $reverse ?></td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
