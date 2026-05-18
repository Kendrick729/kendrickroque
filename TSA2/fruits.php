<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>
    <style>
        body {
            font-family: Arial;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: lightgray;
        }

        img {
            width: 100px;
            height: 80px;
        }
    </style>
</head>

<body>

<h2>My Fruits</h2>

<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>
    </thead>

    <!-- ✅ IMPORTANT -->
    <tbody id="output"></tbody>
</table>

<!-- ✅ SCRIPT MUST BE HERE -->
<script>
const fruits = [
    ["Apple", "Red/Green", "Apples are rich in fiber", "https://via.placeholder.com/100?text=Apple"],
    ["Banana", "Yellow", "Provides energy", "https://via.placeholder.com/100?text=Banana"],
    ["Cherry", "Red", "Contains antioxidants", "https://via.placeholder.com/100?text=Cherry"],
    ["Grapes", "Green/Purple", "Good for heart", "https://via.placeholder.com/100?text=Grapes"],
    ["Mango", "Yellow", "Boosts immunity", "https://via.placeholder.com/100?text=Mango"],
    ["Orange", "Orange", "Rich in Vitamin C", "https://via.placeholder.com/100?text=Orange"],
    ["Papaya", "Orange", "Helps digestion", "https://via.placeholder.com/100?text=Papaya"],
    ["Pineapple", "Yellow", "Improves digestion", "https://via.placeholder.com/100?text=Pineapple"],
    ["Strawberry", "Red", "Rich in antioxidants", "https://via.placeholder.com/100?text=Strawberry"],
    ["Watermelon", "Green/Red", "Hydrates the body", "https://via.placeholder.com/100?text=Watermelon"]
];

let output = document.getElementById("output");

for (let i = 0; i < fruits.length; i++) {
    output.innerHTML += `
        <tr>
            <td><img src="${fruits[i][3          <td>${fruits[i][0]}</td>
            <td>${fruits[i][1]}</td>
            <td>${fruits[i][2]}</td>
        </tr>
    `;
}
</script>

</body>
</html>
