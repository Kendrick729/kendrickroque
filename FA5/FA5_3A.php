<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>

<div class="box">
    <h2>Favorite Colors</h2>

    <form method="POST" action="FA5_3B.php">
        <input type="text" name="c1" placeholder="Color 1" required>
        <input type="text" name="c2" placeholder="Color 2" required>
        <input type="text" name="c3" placeholder="Color 3" required>
        <input type="text" name="c4" placeholder="Color 4" required>
        <input type="text" name="c5" placeholder="Color 5" required>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
