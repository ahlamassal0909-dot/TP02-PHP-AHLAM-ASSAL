<?php

echo "<h2>Partie 1</h2>";

$i = 0;

while ($i <= 20) {

    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo $i . "<br>";
    }

    $i += 2;
}


echo "<h2>Partie 2</h2>";

$compteur = 5;
$executionWhile = 0;

while ($compteur < 5) {

    $executionWhile++;
    $compteur++;
}

echo "while : " . $executionWhile . " exécution(s)<br>";


$compteur = 5;
$executionDoWhile = 0;

do {

    $executionDoWhile++;
    $compteur++;

} while ($compteur < 5);

echo "do-while : " . $executionDoWhile . " exécution(s)<br>";


echo "<h2>Partie 3</h2>";

for ($i = 1; $i <= 20; $i++) {

    if ($i % 3 == 0) {
        continue;
    }

    if ($i >= 16) {
        break;
    }

    echo $i . "<br>";
}

?>