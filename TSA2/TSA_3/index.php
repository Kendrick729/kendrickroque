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

    <!-- LEFT -->
    <div class="header-section">
        <div class="profile-pic-box">
            <img src="profile.jpg" alt="Profile">
        </div>

        <?php require 'personal.php'; ?>
    </div>

    <!-- RIGHT -->
    <div class="content-area">

        <!-- Career Objective -->
        <div class="section-box full">
            <button class="accordion">Career Objective</button>
            <div class="panel">
                <?php include 'objective.php'; ?>
            </div>
        </div>

        <!-- Education -->
        <div class="section-box full">
            <button class="accordion">Educational Attainment</button>
            <div class="panel">
                <?php include 'education.php'; ?>
            </div>
        </div>

        <!-- Skills + Affiliation -->
        <div class="grid-2">

            <div class="section-box">
                <button class="accordion">Skills</button>
                <div class="panel">
                    <?php include 'skills.php'; ?>
                </div>
            </div>

            <div class="section-box">
                <button class="accordion">Affiliation</button>
                <div class="panel">
                    <?php include 'affiliation.php'; ?>
                </div>
            </div>

        </div>

        <!-- Work -->
        <div class="section-box full">
            <button class="accordion">Work Experience</button>
            <div class="panel">
                <?php include 'experience.php'; ?>
            </div>
        </div>

    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const acc = document.querySelectorAll(".accordion");

    acc.forEach(button => {
        button.addEventListener("click", function () {

            const panel = this.nextElementSibling;

            document.querySelectorAll(".panel").forEach(p => {
                if (p !== panel) {
                    p.style.maxHeight = null;
                }
            });

            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }

        });
    });

});
</script>

</body>
</html>
