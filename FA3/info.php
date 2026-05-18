<?php
// Create an array of people
$people = [
    ["name" => "John Cruz", "emoji" => "👨", "age" => 20, "birthday" => "2004-02-10", "contact" => "09123456789"],
    ["name" => "Anna Reyes", "emoji" => "👩", "age" => 22, "birthday" => "2002-05-18", "contact" => "09234567891"],
    ["name" => "Mark Santos", "emoji" => "👨", "age" => 21, "birthday" => "2003-07-22", "contact" => "09345678912"],
    ["name" => "Bella Garcia", "emoji" => "👩", "age" => 19, "birthday" => "2005-09-01", "contact" => "09456789123"],
    ["name" => "Chris Lopez", "emoji" => "👨", "age" => 23, "birthday" => "2001-11-30", "contact" => "09567891234"],
    ["name" => "Diana Flores", "emoji" => "👩", "age" => 20, "birthday" => "2004-03-15", "contact" => "09678912345"],
    ["name" => "Ethan Ramos", "emoji" => "👨", "age" => 24, "birthday" => "2000-06-20", "contact" => "09789123456"],
    ["name" => "Faith Mendoza", "emoji" => "👩", "age" => 21, "birthday" => "2003-08-12", "contact" => "09891234567"],
    ["name" => "George Villanueva", "emoji" => "👨", "age" => 22, "birthday" => "2002-10-05", "contact" => "09912345678"],
    ["name" => "Henry Torres", "emoji" => "👨", "age" => 23, "birthday" => "2001-12-25", "contact" => "09011223344"],
];

// Sort array alphabetically by name
usort($people, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html>
<head>
    <title>People List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            background-color: white;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
        .emoji {
            font-size: 40px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">People Information (Alphabetical Order)</h2>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
    </tr>

    <?php
    $no = 1;
    foreach ($people as $person) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$person['name']."</td>";
        echo "<td class='emoji'>".$person['emoji']."</td>";
        echo "<td>".$person['age']."</td>";
        echo "<td>".$person['birthday']."</td>";
        echo "<td>".$person['contact']."</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
