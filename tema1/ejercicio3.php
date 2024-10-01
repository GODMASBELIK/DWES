<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    table, tr, td {
        border: 1px solid black;
        margin: 5vh auto;
        padding: 100px;
    }

    td {
        font-size: 30px;
        font-weight: bolder;
        text-transform: uppercase;
    }
  </style>
</head>
<body>
<?php

$game = array(
    array('x', 'o', 'x'),
    array('o', 'x', 'o'),
    array('x', ' ', 'o')
  );
  

$game[2][1] = 'x';

echo "<table>";
echo "<tr>";
echo "<td>" . $game[0][0] . "</td>";
echo "<td>" . $game[0][1] . "</td>";
echo "<td>" . $game[0][2] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $game[1][0] . "</td>";
echo "<td>" . $game[1][1] . "</td>";
echo "<td>" . $game[1][2] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $game[2][0] . "</td>";
echo "<td>" . $game[2][1] . "</td>";
echo "<td>" . $game[2][2] . "</td>";
echo "</tr>";

?>
</body>
</html>

