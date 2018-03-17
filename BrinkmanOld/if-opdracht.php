<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 9-2-2018
 * Time: 16:35
 */
$gewerkteuren = 50;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
if($gewerkteuren <= 40) {
    echo "Uw basissalaris is: € " . $bruto;
    setlocale(LC_MONETARY , 'nl_NL');
    echo "<br>Uw belasting is: " . number_format(0.4 * $bruto , 2 , "," , ".");
} elseif ($gewerkteuren > 40) {
    echo "Uw basissalaris is: € " . $bruto;
    setlocale(LC_MONETARY , 'nl_NL');
    echo "<br>Uw belasting is: " . number_format(0.45 * $bruto , 2 , "," , ".");
}