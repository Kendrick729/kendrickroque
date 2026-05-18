<!DOCTYPE html>
<html>
<head>
    <title>FA2 – AppDev Projects</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fde4ec;
            margin: 0;
        }

        .wrapper {
            width: 900px;
            margin: 40px auto;
        }

        header {
            background-color: #ec407a;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }

        .card {
            background-color: #ffffff;
            border: 2px solid #f48fb1;
            padding: 25px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        .card h3 {
            color: #d81b60;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #555;
        }

        .card a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 18px;
            background-color: #ec407a;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .card a:hover {
            background-color: #d81b60;
        }

        .back {
            text-align: center;
            margin-top: 30px;
        }

        .back a {
            color: #d81b60;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="wrapper">

    <header>
        <h1>FA2 Projects</h1>
        <p>Formative Assessment 2</p>
    </header>

    <div class="grid">

        <div class="card">
            <h3>Grade Ranking</h3>
            <p>Conditional statements program for grade ranking.</p>
            <a href="graderanking.php">Open Program</a>
        </div>

        <div class="card">
            <h3>Length Conversion</h3>
            <p>Measurement conversion chart and calculator.</p>
            <a href="lengthconversion.php">Open Program</a>
        </div>

        <div class="card">
            <h3>Possible Combination</h3>
            <p>Looping program that displays two‑digit combinations.</p>
            <a href="possiblecombination.php">Open Program</a>
        </div>

    </div>

    <div class="back">
        <a href="../index.php">← Back to Main Page</a>
    </div>

</div>

</body>
</html>
``