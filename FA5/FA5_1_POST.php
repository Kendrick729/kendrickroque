<!DOCTYPE html>
<html>
<head>
    <title>Personal Information (POST)</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 450px;
            margin: 50px auto;
            background: #fff0f5;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(255, 105, 180, 0.3);
        }

        h2 {
            text-align: center;
            color: #d63384;
        }

        label {
            font-weight: bold;
            color: #c2185b;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #f8bbd0;
        }

        input[type="submit"] {
            width: 100%;
            background: #ff69b4;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #d63384;
        }

        .output {
            margin-top: 20px;
            padding: 15px;
            background: #ffe4ec;
            border-left: 5px solid #ff69b4;
            border-radius: 8px;
        }

        .output p {
            margin: 6px 0;
            color: #880e4f;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>

</head>

<body>

<div class="container">
    <h2>Personal Information (POST)</h2>

    <form method="POST">
        <label>First Name:</label>
        <input type="text" name="fname" pattern="[A-Za-z ]+" title="Letters only" required>

        <label>Middle Name:</label>
        <input type="text" name="mname" pattern="[A-Za-z ]+" title="Letters only" required>

        <label>Last Name:</label>
        <input type="text" name="lname" pattern="[A-Za-z ]+" title="Letters only" required>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>

        <label>Address:</label>
        <input type="text" name="address" required>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function validateName($name) {
            return preg_match("/^[a-zA-Z ]*$/", $name);
        }

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];

        if (!validateName($fname) || !validateName($mname) || !validateName($lname)) {
            echo "<p class='error'>Only letters are allowed in First, Middle, and Last Name.</p>";
        } else {
            echo "<div class='output'>";
            echo "<h3>Your Information:</h3>";
            echo "<p><strong>First Name:</strong> $fname</p>";
            echo "<p><strong>Middle Name:</strong> $mname</p>";
            echo "<p><strong>Last Name:</strong> $lname</p>";
            echo "<p><strong>Date of Birth:</strong> " . $_POST['dob'] . "</p>";
            echo "<p><strong>Address:</strong> " . $_POST['address'] . "</p>";
            echo "</div>";
        }
    }
    ?>

</div>

</body>
</html>