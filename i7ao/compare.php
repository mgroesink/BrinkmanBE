<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 14-12-2017
 * Time: 16:19
 */

$getal1 = rand(1,1000);
$getal2 = rand(1,1000);

echo $getal1 ." < " .$getal2 ." = " . ($getal1 < $getal2?"true":"false");
echo "<br/>";
echo $getal1 ." > " .$getal2 ." = " . ($getal1 > $getal2?"true":"false");
echo "<br/>";
echo $getal1 ." == " .$getal2 ." = " . ($getal1 == $getal2?"true":"false");
echo "<br/>";
echo $getal1 ." === " .$getal2 ." = " . ($getal1 === $getal2?"true":"false");
echo "<br/>";
echo $getal1 ." >= " .$getal2 ." = " . ($getal1>= $getal2?"true":"false");
echo "<br/>";
echo $getal1 ." <= " .$getal2 ." = " . ($getal1 <= $getal2?"true":"false");
echo "<br/>";
echo $getal1 ." != " .$getal2 ." = " . ($getal1 != $getal2?"true":"false");
echo "<br/>";