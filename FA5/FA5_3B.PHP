<?php
session_start();

$_SESSION['colors'] = [
    $_POST['c1'] ?? "",
    $_POST['c2'] ?? "",
    $_POST['c3'] ?? "",
    $_POST['c4'] ?? "",
    $_POST['c5'] ?? ""
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>

<div class="box">
    <h2>Your Favorite Colors</h2>

    <div class="color-list">
        <?php
        if (isset($_SESSION['colors'])) {
            foreach ($_SESSION['colors'] as $color) {
                echo "<p>" . htmlspecialchars($color) . "</p>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>