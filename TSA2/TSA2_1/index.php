<?php

$players = [
    [
        "image" => "images/jordan.jpg",
        "name" => "Michael Jordan",
        "team" => "Chicago Bulls",
        "facts" => "6× NBA Champion, widely considered the GOAT."
    ],
    [
        "image" => "images/lebron.jpg",
        "name" => "LeBron James",
        "team" => "Los Angeles Lakers",
        "facts" => "All-around legend with longevity and versatility."
    ],
    [
        "image" => "images/kareem.jpg",
        "name" => "Kareem Abdul-Jabbar",
        "team" => "Los Angeles Lakers",
        "facts" => "NBA’s all-time leading scorer for decades; skyhook master."
    ],
    [
        "image" => "images/curry.jpg",
        "name" => "Stephen Curry",
        "team" => "Golden State Warriors",
        "facts" => "Revolutionized the game with 3-point shooting."
    ],
    [
        "image" => "images/russell.jpg",
        "name" => "Bill Russell",
        "team" => "Boston Celtics",
        "facts" => "11× NBA Champion; defensive icon."
    ],
    [
        "image" => "images/wilt.jpg",
        "name" => "Wilt Chamberlain",
        "team" => "Philadelphia Warriors",
        "facts" => "Scored 100 points in a single game."
    ],
    [
        "image" => "images/bird.jpg",
        "name" => "Larry Bird",
        "team" => "Boston Celtics",
        "facts" => "Elite shooter and fierce competitor."
    ],
    [
        "image" => "images/duncan.jpg",
        "name" => "Tim Duncan",
        "team" => "San Antonio Spurs",
        "facts" => "Fundamental master with 5 championships."
    ],
    [
        "image" => "images/kobe.jpg",
        "name" => "Kobe Bryant",
        "team" => "Los Angeles Lakers",
        "facts" => "Mamba Mentality; 5× champion."
    ],
    [
        "image" => "images/shaq.jpg",
        "name" => "Shaquille O’Neal",
        "team" => "Los Angeles Lakers",
        "facts" => "Most dominant big man in NBA history."
    ]
];


usort($players, function($a, $b){
    return strcmp($a['name'], $b['name']);
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Players </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>🐐 10 Greatest of all-time 🐐</h1>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Team</th>
                <th>Facts</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($players as $player): ?>
                <tr>
                    <td>
                        <img src="<?= $player['image']; ?>" alt="<?= $player['name']; ?>">
                    </td>

                    <td><?= $player['name']; ?></td>

                    <td><?= $player['team']; ?></td>

                    <td><?= $player['facts']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>