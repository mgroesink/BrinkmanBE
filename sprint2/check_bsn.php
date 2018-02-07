<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 7-2-2018
 * Time: 07:51
 */

$bsn = "458767404";

if(strlen($bsn) != 9) {
    echo "Lengte van het nummer is onjuist";
} else if (!is_numeric($bsn)){
    echo "Een BSN mag alleen cijfers bevatten";
} else {
    $som = 0;
    for($i = 0 ; $i < 8 ; $i++){
        $som += $bsn[$i] * (9 - $i);
    }
    $som -= $bsn[8];
    if($som % 11 == 0) {
        echo "<span style='color:green'>$bsn is een geldig burger service nummer.</span>";    } else{
        echo "<span style='color:red'>$bsn is GEEN geldig burger service nummer.</span>";
    }
}


