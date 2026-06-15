<!DOCTYPE html>
<html>
<head>
    <title>Personal Information (GET)</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
        }

        .container {
            width: 450px;
            margin: 50px auto;
            background: #fff0f5;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(255,105,180,0.3);
        }

        h2 {
            text-align: center;
            color: #d63384;
        }

        label {
            font-weight: bold;
            color: #c2185b;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #f8bbd0;
        }

        input[type="submit"] {
            background: #ff69b4;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #d63384;
        }

        .output {
            margin-top: 15px;
            background: #ffe4ec;
            padding: 15px;
            border-radius: 10px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">
<h2>Personal Information (GET)</h2>

<form method="GET">
<label>First Name:</label>
<input type="text" name="fname" pattern="[A-Za-z ]+" required>

<label>Middle Name:</label>
<input type="text" name="mname" pattern="[A-Za-z ]+" required>

<label>Last Name:</label>
<input type="text" name="lname" pattern="[A-Za-z ]+" required>

<label>Date of Birth:</label>
<input type="date" name="dob" required>

<label>Address:</label>
<input type="text" name="address" required>

<input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_GET)){

    function valid($n){
        return preg_match("/^[a-zA-Z ]*$/",$n);
    }

    if(!valid($_GET['fname']) || !valid($_GET['mname']) || !valid($_GET['lname'])){
        echo "<p class='error'>Only letters allowed in names.</p>";
    } else {
        echo "<div class='output'>";
        echo "First Name: ".$_GET['fname']."<br>";
        echo "Middle Name: ".$_GET['mname']."<br>";
        echo "Last Name: ".$_GET['lname']."<br>";
        echo "Date of Birth: ".$_GET['dob']."<br>";
        echo "Address: ".$_GET['address']."<br>";
        echo "</div>";
    }
}
?>

</div>
</body>
</html>