<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 20-1-2018
 * Time: 22:36
 */
if(isset($_POST["submit"]))
{
    if(empty($_POST["naam"]))
    {
        echo "Naam is niet ingevuld";
    }
    else
    {
        $naam = $_POST["naam"];
        $taal = $_POST["taal"];
        if($taal == "N")
        {
            echo "Goedendag " . $naam;
        }
        elseif($taal == "E")
        {
            echo "Hi there " . $naam;
        }
        elseif($taal == "S")
        {
            echo "Buenos dias " . $naam;
        }
        else
        {
            echo "Er is geen taal gekozen";
        }
    }
}