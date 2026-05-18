<?php
// ==========================
// Personal Information
// ==========================
$name = "Lorenz Kendrick H. Roque";
$title = "Student";
$phone = "0920-405-0463";
$email = "lorenzkendrickroque729@gmail.com";
$address = "16 Reuben, Metrogate Complex, Meycauayan, Bulacan";

// About me
$about = "Hardworking and motivated student with a strong passion for learning and self-improvement.
Technologically adept with experience using various social media platforms, office productivity tools,
and advanced computer applications. Known for having a positive attitude, being adaptable, and demonstrating
a consistent eagerness to expand knowledge and master new technologies.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $name; ?> - Resume</title>

<style>
body {
  font-family: 'Segoe UI', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #ffe4e6;
}
.resume {
  display: flex;
  max-width: 1000px;
  margin: 40px auto;
  background-color: #fff0f5;
  box-shadow: 0 4px 15px rgba(255,105,180,0.3);
}
.left-panel {
  background-color: #ff69b4;
  color: #fff;
  width: 35%;
  padding: 40px 30px;
}
.right-panel {
  width: 65%;
  padding: 40px 30px;
  background-color: #fff;
h3 {
  color: #ff69b4;
  border-bottom: 1px solid #fbcfe8;
}
ul {
  padding-left: 20px;
}
</style>
</head>

<body>

<div class="resume">

<!-- LEFT PANEL -->
<div class="left-panel">

  <h1><?php echo $name; ?></h1>
  <h2><?php echo $title; ?></h2>

  <h3>About me</h3>
  <p><?php echo $about; ?></p>

  <h3>Contact</h3>
  <p><?php echo $phone; ?></p>
  <p><?php echo $email; ?></p>
  <p><?php echo $address; ?></p>

</div>

<!-- RIGHT PANEL -->
<div class="right-panel">

  <h3>Education</h3>
  <p><strong>Notre Dame of Greater Manila</strong></p>
  <ul>
    <li>2017–2018: Graduated Elementary with Honors</li>
    <li>2021–2022: Graduated High School</li>
    <li>2023–2024: Graduated Senior High School – STEM Strand</li>
  </ul>

  <p><strong>FEU Institute of Technology</strong></p>
  <ul>
    <li>2024–Present: BSITCST</li>
  </ul>

  <h3>Achievements</h3>
  <ul>
    <li>Best in Research – Field of Medicine and Science</li>
    <li>Best in Mathematics – 8th Grade</li>
  </ul>

  <h3>Languages</h3>
  <p>Filipino</p>
  <p>English</p>

  <h3>Skills</h3>
  <ul>
    <li>Research Writing</li>
    <li>Coding</li>
    <li>Networking</li>
    <li>Problem Solving</li>
    <li>Web Designing</li>
  </ul>

  <h3>Certificates</h3>
  <ul>
    <li>CCNA: Introduction to Networks</li>
    <li>Java</li>
    <li>Introduction to Cybersecurity</li>
    <li>Network Defense</li>
  </ul>

</div>
</div>

</body>
</html>
``