<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 20-1-2018
 * Time: 20:07
 */
echo "<br>--- Opgave 6: ";
$producten = []; // create new array producten
$producten[0] = "Boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD's";
echo "<br>";
echo "Array producten aangemaakt met " . sizeof($producten) . " items.";
echo "<hr>";

echo "<br>--- Opgave 7: <br>";
echo "Use of function print_r<br>";
print_r($producten);

echo "Use of function var_dump<br>";
var_dump($producten);
echo "<hr>";

echo "<br>--- Opgave 8: <br>";
unset($producten[2]);
print_r($producten);
echo "<hr>";

echo "<br>--- Opgave 9: <br>";
$producten[2] = "Smartphones";
for($i = 0 ; $i < sizeof($producten) ; $i++)
{
    $gevonden = array_key_exists($i , $producten);
    echo "Key " . $i .  " gevonden? " . ($gevonden == 1?"JA":"NEE") . "<br>";
}
echo "<hr>";

echo "<br>--- Opgave 10: <br>";
$gevonden = in_array("Boeken" , $producten);
echo "Boeken gevonden? " . ($gevonden == 1?"JA":"NEE") . "<br>";
$gevonden = in_array("Tablets" , $producten);
echo "Tablets gevonden? " . ($gevonden == 1?"JA":"NEE") . "<br>";
echo "<hr>";

echo "<br>--- Opgave 11: <br>";
$gevonden = array_search("Boeken" , $producten);
if($gevonden !== false) {
    echo "Boeken gevonden op positie " . ($gevonden + 1) . ".<br>";
}
else
{
    echo "Boeken komt niet voor in array.";
}
$gevonden = array_search("Tablets" , $producten);
echo "<br>";
if($gevonden !== false) {
    echo "Tablets gevonden op positie " . ($gevonden + 1) . ".<br>";
}
else
{
    echo "Tablets komt niet voor in array.";
}
echo "<hr>";

echo "<br>--- Opgave 12: <br>";
array_push($producten , "Hard disks");
print_r($producten);
echo "<hr>";

echo "<br>--- Opgave 13: <br>";
$last_element = array_pop($producten);
echo "The last element (" . $last_element .") was removed from the array.";
echo "<br>";
var_dump($producten);
echo "<hr>";

echo "<br>--- Opgave 14: <br>";
$first_element = array_shift($producten);
echo "The first element (" . $first_element .") was removed from the array too.";
echo "<br>";
var_dump($producten);
echo "<hr>";

echo "<br>--- Opgave 15: <br>";
array_unshift($producten , $first_element , $last_element);
echo $first_element . " and " . $last_element . " are added to the front of the array too.";
echo "<br>";
var_dump($producten);
echo "<hr>";

echo "<br>--- Opgave 16: <br>";
$lotto = [];
for($i = 1 ; $i < 50 ; $i++)
{
    array_push($lotto , $i);
}
$random_numbers = array_rand($lotto , 6);
asort($random_numbers);
echo "The lotto numbers for this week are: <br>";
for($ball = 0 ; $ball < sizeof($random_numbers) ; $ball++) {
    echo "Ball nr. " . ($ball + 1) . ": " . $random_numbers[$ball] . "<br>";
}

function printArray($item , $key){

    if($item % 2 == 0) {
        echo "<br>$key" . ": " . "<span style='color:red'><i> $item </i></span>";
    }
    else
    {
        echo "<br>$key" . ": " . "<span style='color:green'><i> $item </i></span>";
    }
    echo $item % 2 == 0 ? " (Even)" : "Odd";
}

function printBooks($item , $key)
{
    echo "<br>$key" . ": " . "<span style='color:red'><i> $item </i></span>";

}
array_walk($random_numbers , "printArray");

echo "<br>";
$string_lotto = implode(" , " , $random_numbers);
echo $string_lotto;
echo "<br>";

$books = array (
    array("titel" => "Dark side of the moon" , "artiest" => "Pink Floyd"),
    array("titel" => "Black & Blue" , "artiest" => "Rolling Stones"),
    array("titel" => "Abbey Road" , "artiest" => "Beatles"),
    array("titel" => "The Wall" , "artiest" => "Pink Floyd")
);

array_walk_recursive($books , "printBooks");

echo "<hr>";

