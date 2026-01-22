<?php
function addition($a, $b) {
    return $a + $b;
}
echo "Somme : " . addition(5, 10);
echo "<br>";
echo"<br>";





function bienvenue($nom = "visiteur") {
    echo "Bienvenue " . $nom;
}
bienvenue(); // Affiche "Bienvenue visiteur"


echo"<br>";
echo"<br>";


$compteur = 0;

function incrementer() {
    static $compteur = 0;
    $compteur++;
    echo "$compteur<br>";
}
incrementer(); // Affiche 1
incrementer(); // Affiche 2
echo "<br>";




$site = "MonSite";

function afficherSite() {
    global $site;
    echo $site;
}
afficherSite();

echo "<br>";
echo "<br>";


function add($x) {
    static $sum = 0;
    $sum += $x;
    return "$sum <br>";
}

echo "resultat  : ".add(5); // 5
echo "resultat  : ".add(3); // 8
echo "resultat  : ".add(2); // 10
?>



