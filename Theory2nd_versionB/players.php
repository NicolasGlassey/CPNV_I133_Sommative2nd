<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : Diagnostic2nd
 * Created  : 09.01.2019 - 16:41
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */
$title = 'WTA Best Players';
$players = array
(
    array("HALEP Simona","ROU",6641),
    array("KERBER Angelique","ALL",5875),
    array("STEPHENS Sloane","USA", 5023)
);
$displayScore = '<tr><th>Player Name</th><th>Nationality</th><th>Points</th></tr>';
foreach ($players as $player)
{
    $displayScore = $displayScore . '<tr><td>'.$playe[0].'</td><td>'
                    .$player[1].'</td><td>'.$player[2].'</td>';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo title ?></title>
  </head>
  <body>
    <table><?php echo $displayScore?></table>
  </body>
</html>

