<?php
$conn = mysqli_connect("localhost", "root", "", "dogdb");

$name = $_POST['name'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$address = $_POST['address'];
$color = $_POST['color'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$query = "INSERT INTO dogs(name, breed, age, address, color, height, weight)
VALUES('$name','$breed','$age','$address','$color','$height','$weight')";

mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Saved</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="success-box">
        <h2>Record Saved Successfully</h2>
        <a href="index.php" class="btn">Add New</a>
        <a href="records.php" class="btn">View Records</a>
    </div>
</div>

</body>
</html>
