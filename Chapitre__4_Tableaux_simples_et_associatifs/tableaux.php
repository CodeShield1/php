<?php
$fruits=["Pomme", "Banane", "Orange"];
echo $fruits[0]; 
echo "<br>";
echo "Nombre de fruits : " . count($fruits);

echo "<br>";




$utilisateur = [
    "nom" => "Alice",
    "email" => "alice@test.com",
    "age" => 25
];
echo $utilisateur["nom"];
echo"<br>";


foreach($utilisateur as $value){
    echo "$value<br>";
}



?>