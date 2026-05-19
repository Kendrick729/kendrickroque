<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volume of Shapes</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

  <h1>Volume of Shapes</h1>

  <table>

    <thead>
      <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
      </tr>
    </thead>

    <tbody>

      <?php

        function cubeVolume($s){
          return $s ** 3;
        }

        function rectangularPrismVolume($l, $w, $h){
          return $l * $w * $h;
        }

        function cylinderVolume($r, $h){
          return pi() * ($r ** 2) * $h;
        }

        function coneVolume($r, $h){
          return (1/3) * pi() * ($r ** 2) * $h;
        }

        function sphereVolume($r){
          return (4/3) * pi() * ($r ** 3);
        }

        function pyramidVolume($l, $w, $h){
          return (1/3) * $l * $w * $h;
        }

        $examples = [

            ["s = 8",
            "V = s³",
            cubeVolume(8)],

            ["l = 10, w = 5, h = 3",
            "V = l × w × h",
            rectangularPrismVolume(10,5,3)],

            ["r = 4, h = 12",
            "V = πr²h",
            round(cylinderVolume(4,12), 2)],

            ["r = 5, h = 9",
            "V = ⅓πr²h",
            round(coneVolume(5,9), 2)],

            ["r = 7",
            "V = ⁴⁄₃πr³",
            round(sphereVolume(7), 2)],

            ["l = 9, w = 6, h = 12",
            "V = ⅓lwh",
             round(pyramidVolume(9,6,12), 2)]

        ];
        
        foreach($examples as $ex){

          echo "<tr>";

          echo "<td>{$ex[0]}</td>";

          echo "<td class='formula'>{$ex[1]}</td>";

          echo "<td class='answer'>{$ex[2]}</td>";

          echo "</tr>";

        }

      ?>

    </tbody>

  </table>

</div>

</body>
</html>