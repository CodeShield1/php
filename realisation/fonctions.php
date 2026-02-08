<?php


    function virifierNotes(array $notes): bool{
        
        foreach($notes as $matier=>$listenotes){
            foreach($listenotes as $note){
                if(!is_numeric($note) || $note < 0 || $note > 20){
                    
                     return false;
                }
            }
        }
        return true;
    }



    function calculerMoyenneGenerale(array $notes): float|int {
        $somme = 0;
        $nombreNotes = 0;

        foreach ($notes as $matiere => $notesMatiere) {
            foreach ($notesMatiere as $note) {
                $somme += $note;     
                $nombreNotes++;      
            }
        }

        if ($nombreNotes === 0) {
            return 0; 
        }

        return $somme / $nombreNotes;
    }


    function getMention(float $moyenne): string {
        $mentions = [
            16 => "Très Bien",
            14 => "Bien",
            12 => "Assez Bien",
            10 => "Passable",
            0  => "Ajourné"
        ];

        foreach ($mentions as $seuil => $mention) {
            if ($moyenne >= $seuil) {
                return $mention;
            }
        }
        return "Ajourné";
    }


    function decisionFinale(float $moyenne): string
    {
        return ($moyenne >= 10) ? "Admis" : "Non Admis";
    }



   

?>

<!-- function calcul_moyenne(array $data){
$somme= array_sum($data);
$count = count($data);
return $somme/$count;
}



$etudiant = [
"nom" => $nom,
"prenom" => $prenom,
"date_naissance" => $date_naissance,
"filiere" => $filiere
];



$notes = [
"frontend" => [$frontend1, $frontend2],
"backend" => [$backend1, $backend2],
"entreprenariat" => [$entreprenariat1, $entreprenariat2],
"anglais" => [$anglais1, $anglais2],
"softskills" => [$softskills1, $softskills2]
];




function calculerMoyenneGenerale(array $notes) {
$somme = 0;
$nombreNotes = 0;

foreach ($notes as $matiere => $notesMatiere) {

$moyenneMatiere = array_sum($notesMatiere) / count($notesMatiere);
$somme += $moyenneMatiere;
$nombreNotes++;
}
return $somme/$nombreNotes;









 function getMention($moyennes) {
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
} -->