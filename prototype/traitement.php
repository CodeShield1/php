<?php
if($_SERVER["REQUEST_METHOD"]==='POST'){

    if(empty($_POST['nom'])&& 
       empty( $_POST['note1'])&& 
       empty( $_POST['note2'])&&
       empty( $_POST['note3']) ){
       
        echo "Tous les champs sont obligatoires";
        exit;
    }


    $nom = trim($_POST['nom']);
    $notes = [
        trim($_POST['note1']),
        trim($_POST['note2']),
        trim($_POST['note3'])
    ];

    foreach($notes as $note){
        if(!is_numeric($note) || $note <= 0 || $note > 20){
            echo'problem les donner  ';
            exit;
        }
    }

    function calcul_moyenne(array $data){
        $somme= array_sum($data);
        $count = count($data);
        return $somme/$count;
    }
  

    function mention($moyennes){
        if ($moyennes >= 16) {
            return "Très Bien";
        }

        elseif ($moyennes >= 14) {
            return "Bien";
        }

        elseif ($moyennes >= 12) {
            return "Assez Bien";
        }

        elseif ($moyennes >= 10) {
            return "Passable";
        } 

        else {
            return "Ajourné";
        }
    }

        $moyenne=calcul_moyenne($notes);
        $mention = mention($moyenne);
 


    echo "👤 Nom : $nom <br>";
    echo "📊 Moyenne : " . round($moyenne, 2) . "<br>";
    echo "🏆 Mention : $mention";
}

?>