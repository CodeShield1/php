<?php
// echo "MY name : " . $_POST["name"];
// echo "<br>";
// echo "MY age  : " . $_POST["age"];

$errors = [];

if(!isset($_POST["name"]) ||empty(trim($_POST["name"]))){
    $errors [] = "walo ghalate f isemek wla 3amel espace  ";
}
if(!isset($_POST["age"]) || $_POST["age"]<=0){
 $errors [] = "3omrek ghalat";
}




if(!empty($errors)){
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
}






?>