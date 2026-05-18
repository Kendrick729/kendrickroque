<!DOCTYPE html>
<html>
<head>
    <title>Grade Ranking Program</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fde4ec;
            margin: 0;
        }

        .container {
            width: 500px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }

        .back-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px 16px;
            background-color: #ec407a;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .back-btn:hover {
            background-color: #d81b60;
        }

        .name-box {
            border: 1px solid #ec407a;
            padding: 8px;
            width: 60%;
            margin-bottom: 20px;
        }

        .main {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .box {
            border: 1px solid #ec407a;
            padding: 15px;
            width: 90px;
            text-align: center;
            background-color: #ffffff;
        }

        .picture {
            border: 1px solid #ec407a;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            background-color: #ffffff;
        }

        input {
            width: 100%;
            text-align: center;
        }

        button {
            margin-top: 15px;
            padding: 6px 15px;
            background-color: #ec407a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d81b60;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="../index.php" class="back-btn">← Return to Main Directory</a>

    <div class="name-box">
        Name: <input type="text" placeholder="First Name MI. Lastname">
    </div>

    <div class="main">
        <div class="box">
            Rank:<br>
            <span id="rank">-</span>
        </div>

        <div class="box">
            Grade:<br>
            <input type="number" id="grade" placeholder="0-100">
        </div>

        <div class="picture" id="emoji">🙂</div>
    </div>

    <button onclick="computeRank()">Compute</button>

</div>

<script>
function computeRank() {
    let grade = document.getElementById("grade").value;
    let rank = "";
    let emoji = "";

    if (grade >= 93 && grade <= 100) { rank = "A"; emoji = "🏆"; }
    else if (grade >= 90) { rank = "A-"; emoji = "😄"; }
    else if (grade >= 87) { rank = "B+"; emoji = "😊"; }
    else if (grade >= 83) { rank = "B"; emoji = "🙂"; }
    else if (grade >= 80) { rank = "B-"; emoji = "🙂"; }
    else if (grade >= 77) { rank = "C+"; emoji = "😐"; }
    else if (grade >= 73) { rank = "C"; emoji = "😐"; }
    else if (grade >= 70) { rank = "C-"; emoji = "😕"; }
    else if (grade >= 67) { rank = "D+"; emoji = "😟"; }
    else if (grade >= 63) { rank = "D"; emoji = "😟"; }
    else if (grade >= 60) { rank = "D-"; emoji = "😢"; }
    else { rank = "F"; emoji = "😭"; }

    document.getElementById("rank").innerText = rank;
    document.getElementById("emoji").innerText = emoji;
}
</script>

</body>
</html>
``