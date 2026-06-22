<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        form {
            width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
        }
        input { width:100%; padding:8px; margin:5px 0; }
        button { background: green; color:white; padding:10px; width:100%; }
    </style>
</head>
<body>

<form method="POST">
    <h2>Register Dog</h2>

    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="breed" placeholder="Breed" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="text" name="address" placeholder="Address">
    <input type="text" name="color" placeholder="Color">
    <input type="number" step="0.1" name="height" placeholder="Height">
    <input type="number" step="0.1" name="weight" placeholder="Weight">

    <button type="submit" name="save">Save</button>
</form>

<a href="DogView.php">View Dogs</a>

<?php
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name','$breed','$age','$address','$color','$height','$weight')";

    if($conn->query($sql)){
        echo "<script>alert('Saved Successfully');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

</body>
</html>
