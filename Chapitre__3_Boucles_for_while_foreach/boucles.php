<?php
$name="brahim";
for($i=0; $i<10; $i++){
    echo "{$i} {$name} <br>"; 
}
echo "<br>";
echo "<br>";    


$p=1;
while($p<10){
    echo "Compteur: $p <br>" ;
    $p++;
}
echo "<br>";    
echo "<br>";    



$b=1;
do{
    echo "Compteur: $b <br>";
    $b++;
}while($b<10);

echo "<br>";
echo "<br>";


for ($z = 1; $z <= 10; $z++) {
    if ($z == 5) continue; // saute le 5
    if ($z == 8) break;    // arrête à 8
    echo "Valeur : $z <br>";
}


echo"<br>";

$fruits = [ "apple",
            "banana",
            "orange"
            ];
foreach ($fruits as $fruit) {
    echo "{$fruit}  <br>";
}

echo "<br>";


foreach ($fruits as $index=>$fruit) {
    echo "{$fruit} : {$index} <br>";
}
echo "<br>";
echo"<br>";


$user = [
    "name" => "brahim",
    "age" => 20,
    "country" => "Morocco"
];

foreach ($user as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>



 


