<!DOCTYPE html>
<html>
<head>
    <title>Two-Digit Decimal Combinations</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fde4ec;
            margin: 0;
        }

        .container {
            width: 650px;
            margin: 50px auto;
            padding: 25px;
            background-color: #ffffff;
            border-radius: 12px;
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

        h2 {
            text-align: center;
            color: #d81b60;
            margin-bottom: 20px;
        }

        button {
            display: block;
            margin: 0 auto 20px auto;
            padding: 8px 20px;
            font-size: 14px;
            cursor: pointer;
            border: none;
            border-radius: 6px;
            background-color: #ec407a;
            color: white;
        }

        button:hover {
            background-color: #d81b60;
        }

        #output {
            border: 1px solid #d81b60;
            padding: 15px;
            height: 180px;
            overflow-y: auto;
            font-family: "Courier New", monospace;
            font-size: 14px;
            background-color: #fafafa;
            line-height: 1.6;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="../index.php" class="back-btn">← Return to Main Directory</a>

    <h2>Two‑Digit Decimal Combinations</h2>

    <button onclick="generate()">Generate</button>

    <div id="output"></div>

</div>

<script>
function generate() {
    let result = "";

    for (let i = 0; i <= 99; i++) {
        if (i < 10) {
            result += "0" + i;
        } else {
            result += i;
        }

        if (i < 99) {
            result += ", ";
        }
    }

    document.getElementById("output").innerText = result;
}
</script>

</body>
</html>