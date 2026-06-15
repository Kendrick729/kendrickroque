<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST['firstname'] ?? "";
    $mname = $_POST['middlename'] ?? "";
    $lname = $_POST['lastname'] ?? "";

    // Function to validate letters only
    function validateName($name) {
        return preg_match("/^[a-zA-Z ]*$/", $name);
    }

    // Check if valid before setting cookies
    if (validateName($fname) && validateName($mname) && validateName($lname)) {
        setcookie("firstname", $fname, time() + 60); 
        setcookie("middlename", $mname, time() + 60); 
        setcookie("lastname", $lname, time() + 60); 
        $valid = true;
    } else {
        $valid = false;
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
<title>Cookie Personal Info</title>

<style>
body {
    font-family: Arial;
    background: linear-gradient(to right, #ff9a9e, #fad0c4);
}

.box {
    width: 420px;
    margin: 50px auto;
    background: #fff0f5;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0px 5px 15px rgba(255,105,180,0.3);
}

h2 {
    text-align: center;
    color: #d63384;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
    color: #c2185b;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #f8bbd0;
}

input[type="submit"] {
    width: 100%;
    margin-top: 15px;
    padding: 10px;
    background: #ff69b4;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #d63384;
}

.output {
    margin-top: 15px;
    background: #ffe4ec;
    padding: 10px;
    border-radius: 10px;
}

.error {
    color: red;
    margin-top: 10px;
}
</style>
</head>

<body>

<div class="box">
<h2>Personal Information</h2>

<form method="POST">

<label>First Name:</label>
<input type="text" name="firstname" pattern="[A-Za-z ]+" title="Letters only" required>

<label>Middle Name:</label>
<input type="text" name="middlename" pattern="[A-Za-z ]+" title="Letters only" required>

<label>Last Name:</label>
<input type="text" name="lastname" pattern="[A-Za-z ]+" title="Letters only" required>

<input type="submit" value="Submit">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!$valid) {
        echo "<p class='error'>Only letters are allowed in all fields.</p>";
    }
}
?>

<div class="output">
<h3>Cookie Output:</h3>
<p id="first"></p>
<p id="middle"></p>
<p id="last"></p>
</div>

</div>

<script>
function getCookie(name) {
    let cookies = document.cookie.split(";");
    for (let i = 0; i < cookies.length; i++) {
        let c = cookies[i].trim();
        if (c.indexOf(name + "=") == 0) {
            return decodeURIComponent(c.substring(name.length + 1));
        }
    }
    return "";
}

// 10 seconds
setTimeout(function(){
    let fname = getCookie("firstname");
    if(fname) document.getElementById("first").innerHTML = "First Name: " + fname;
}, 10000);

// 20 seconds
setTimeout(function(){
    let mname = getCookie("middlename");
    if(mname) document.getElementById("middle").innerHTML = "Middle Name: " + mname;
}, 20000);

// 30 seconds
setTimeout(function(){
    let lname = getCookie("lastname");
    if(lname) document.getElementById("last").innerHTML = "Last Name: " + lname;
}, 30000);
</script>

</body>
</html>
