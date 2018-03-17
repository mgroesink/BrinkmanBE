<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 23-1-2018
 * Time: 12:09
 */
function berekenverzendkosten($land){
    $verzendkosten = isset($_POST["land"])?$_POST["land"]:0;
    switch($_POST["land"]) {
        case "NL":
        case "BE":
            $verzendkosten = 0;
            break;
        case "GE":
            $verzendkosten = 10;
            break;
        case "FR":
            $verzendkosten = 12.5;
            break;
        default:
            $verzendkosten = 25;
            break;
    }
    return $verzendkosten;
}

function randomlottogetallen($land){
    $random = 0;
    if(isset($_POST["land"])){
        $getallen = [];
        switch ($_POST["land"]) {
            case "NL":
            case "BE":
                for($i = 1 ; $i <= 46 ; $i++){
                    array_push($getallen , $i);
                }
                break;
            case "GE":
                for($i = 1 ; $i <= 49 ; $i++){
                    array_push($getallen , $i);
                }
                break;
            case "FR":
                for($i = 1 ; $i <= 48 ; $i++){
                    array_push($getallen , $i);
                }
                break;
            default:
                for($i = 1 ; $i <= 40 ; $i++){
                    array_push($getallen , $i);
                }
                break;
        }
        return array_rand($getallen , 6);
    }
    else {

    }

}

function printarray($array){
    foreach ($array as $value){
        echo $value . "<br>";
    }
}