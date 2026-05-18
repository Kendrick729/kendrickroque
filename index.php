<!DOCTYPE html>
<html>
<head>
    <title>AppDev Portfolio – Roque</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fde4ec;
            margin: 0;
        }

        /* CENTER WRAPPER */
        .wrapper {
            width: 900px;
            margin: 40px auto;
        }

        /* CENTERED HEADER */
        header {
            background-color: #ec407a;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        header h1 {
            margin: 0;
        }

        header p {
            margin: 5px 0 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
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
            margin-bottom: 10px;
            color: #d81b60;
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
    </style>
</head>

<body>

<div class="wrapper">

    <header>
        <h1>Application Development</h1>
        <p>Student Project Dashboard</p>
    </header>

    <div class="grid">

        <div class="card">
            <h3>FA1</h3>
            <p>Formative Assessment 1 activities and exercises.</p>
            <a href="FA1/resume.php">Open FA1</a>
        </div>

        <div class="card">
            <h3>FA2</h3>
            <p>Formative Assessment 2 projects and programs.</p>
            <a href="FA2/">Open FA2</a>
        </div>

    </div>

</div>

</body>
</html>