<?php
$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;

echo "<pre>";

var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);

echo "\nConversions :\n";

$a = (int) $chaine;
$b = (int) $decimal;
$c = (string) $entier;

var_dump($a);
var_dump($b);
var_dump($c);

echo "\nAvec echo :\n";

echo $vrai . "<br>";
echo $faux . "<br>";

echo "\nAvec var_dump :\n";

var_dump($vrai);
var_dump($faux);

echo "\nConversion en booléen :\n";

var_dump((bool)0);
var_dump((bool)"0");
var_dump((bool)"PHP");
var_dump((bool)[]);

echo "</pre>";
?>