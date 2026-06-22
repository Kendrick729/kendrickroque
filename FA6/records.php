<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="title">Dog Registration Records</h1>

<div class="table-container">
<?php
$conn = mysqli_connect("localhost", "root", "", "dogdb");
$result = mysqli_query($conn, "SELECT * FROM dogs");
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Address</th>
            <th>Color</th>
            <th>Height</th>
            <th>Weight</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['breed']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['height']; ?></td>
            <td><?php echo $row['weight']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>

</body>
</html>