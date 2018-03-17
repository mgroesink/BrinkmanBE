<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 23-1-2018
 * Time: 12:38
 */
global $email;
global $naam;

$email = "mroesink@rocvantwente.nl";
$naam = "Marcel Roesink";

print $naam . "<br>" . $email;

print "<br>";

print $GLOBALS["email"];
