<htmL>
<head>
    <title>Formatting strings</title>
    <style>
        body {
            padding: 25px;
        }
        input , textarea{
            margin-bottom: 10px;
        }
    </style>
</head>
    <body>
        <form name="form" action="<?php echo $SERVER['PHP_SELF']?>" method="post">
            <input required type="text" name="naam" placeholder="bv. Joop Doderer"/><br>
            <input required type="text" name="adres" placeholder="Adres"/><br>
            <input required type="text" name="postcode" placeholder="bv. 7777AA"/><br>
            <input required type="text" name="plaats" placeholder="bv. Almeloooo"/><br>
            <input required type="email" name="email" placeholder="bv. j.debruin@test.nl"/><br>
            <textarea name="commentaar" placeholder="Typ je commentaar ..." rows="4"></textarea><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </body>
</htmL>
<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 22-1-2018
 * Time: 07:36
 */
if(isset($_POST["submit"])) {
    $naam = htmlspecialchars($_POST["naam"]);
    $adres = htmlspecialchars($_POST["adres"]);
    $postcode = strtoupper(htmlspecialchars($_POST["postcode"]));
    if(strpos($postcode , " ") === false) {
        $postcode = substr($postcode,0,4) . " " . substr($postcode,4,2);
    }
    $plaats = strtoupper(htmlspecialchars($_POST["plaats"]));
    $email = htmlspecialchars($_POST["email"]);
    $commentaar = $_POST["commentaar"];
    echo $naam;
    echo "<br>";
    echo $postcode . " ";
    echo $plaats;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $commentaar;
    echo "<br>";
}