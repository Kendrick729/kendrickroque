<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roque Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="resume-container">

    <!-- LEFT SIDEBAR -->
    <div class="header-section">
        <div class="profile-pic-box">
            <img src="profile.jpg" alt="Profile">
        </div>

        <?php require 'personal.php'; ?>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="content-area">

        <!-- Career Objective -->
        <div class="section-box full">
            <h2>Career Objective</h2>
            <?php include 'objective.php'; ?>
        </div>

        <!-- Education -->
        <div class="section-box full">
            <h2>Educational Attainment</h2>
            <?php include 'education.php'; ?>
        </div>

        <!-- Skills + Affiliation (SIDE BY SIDE ONLY HERE) -->
        <div class="grid-2">

            <div class="section-box">
                <h2>Skills</h2>
                <?php include 'skills.php'; ?>
            </div>

            <div class="section-box">
                <h2>Affiliation</h2>
                <?php include 'affiliation.php'; ?>
            </div>

        </div>

        <!-- Work Experience -->
        <div class="section-box full">
            <h2>Work Experience</h2>
            <?php include 'experience.php'; ?>
        </div>

    </div>

</div>

</body>
</html>
``