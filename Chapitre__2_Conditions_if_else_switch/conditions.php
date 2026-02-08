<?php
    $day="lundi";
    switch ($day) {
        case "mardi":
          echo "aujourd'hui c'est mardi";
        break;

        case "jeudi":
           echo "aujourd'hui c'est mardi";
        break;

        case "lundi":
          echo "aujourd'hui c'est mardi";
        break;
    }
    
    
    $note = 14;
    if ($note >= 16) {
        echo "Très bien";
    } elseif ($note >= 10) {
        echo "Passable";
    } else {
        echo "Échec";
    }


?>
