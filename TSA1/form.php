<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dcdcdc;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #cfd6e0;
            padding: 20px;
            border-radius: 5px;
        }

        h2 {
            background-color: #3b4f7d;
            color: white;
            padding: 8px;
            display: inline-block;
        }

        .form-row {
            display: grid;
            grid-template-columns: 150px 1fr;
            margin-bottom: 15px;
            align-items: center;
        }

        label {
            font-weight: bold;
        }

        .input-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        input, select, textarea {
            padding: 8px;
            border: none;
            background-color: #bfc7d5;
            width: 100%;
        }

        textarea {
            resize: none;
            height: 60px;
        }

        .three-col {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
        }

        .submit-btn {
            margin-top: 20px;
            padding: 10px;
            width: 100%;
            background-color: #3b4f7d;
            color: white;
            border: none;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #2c3e63;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Info</h2>

    <form method="POST">
        
        <!-- Full Name -->
        <div class="form-row">
            <label>Full Name</label>
            <div class="input-group">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
            </div>
        </div>

        <!-- Address -->
        <div class="form-row">
            <label>Address</label>
            <div>
                <input type="text" name="street" placeholder="Street Address"><br><br>
                <div class="input-group">
                    <input type="text" name="city" placeholder="City">
                    <input type="text" name="state" placeholder="State/Province">
                </div>
            </div>
        </div>

        <!-- Birthdate -->
        <div class="form-row">
            <label>Birth Date</label>
            <div class="three-col">
                <input type="text" name="date" placeholder="Date">
                <input type="text" name="month" placeholder="Month">
                <input type="text" name="year" placeholder="Year">
            </div>
        </div>

        <!-- Gender -->
        <div class="form-row">
            <label>Gender</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="Male"> Male</label>
                <label><input type="radio" name="gender" value="Female"> Female</label>
                <label><input type="radio" name="gender" value="N/A"> N/A</label>
            </div>
        </div>

        <!-- Student Number -->
        <div class="form-row">
            <label>Student Number</label>
            <input type="text" name="student_no">
        </div>

        <!-- Email -->
        <div class="form-row">
            <label>Student Email</label>
            <input type="email" name="email" placeholder="example@example.com">
        </div>

        <!-- Comments -->
        <div class="form-row">
            <label>Additional Comments</label>
            <textarea name="comments"></textarea>
        </div>

        <input type="submit" value="Register" class="submit-btn">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = ucwords(strtolower($_POST['fname']));
        $lname = strtoupper($_POST['lname']);
        $student_no = $_POST['student_no'];
        $email = $_POST['email'];

        echo "<div style='margin-top:20px; background:white; padding:15px;'>";
        echo "<h3>Student Personal Record</h3>";
        echo "Name: $fname $lname <br>";
        echo "Student No: $student_no <br>";
        echo "Email: $email";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
``