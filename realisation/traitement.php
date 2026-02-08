<?php
    // require "functions.php" ;

    // if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    //   exit("Accès interdit");

    // }

    // $nom = $_POST["nom"] ?? "";
    // $prenom = $_POST["prenom"] ?? "";
    // $date_naissance = $_POST["date_naissance"] ?? "";
    // $filiere = $_POST["filiere"] ?? "";

    // $frontend1 = $_POST["frontend1"] ?? 0;
    // $frontend2 = $_POST["frontend2"] ?? 0;
    // $backend1  = $_POST["backend1"] ?? 0;
    // $backend2  = $_POST["backend2"] ?? 0;
    // $entre1    = $_POST["entreprenariat1"] ?? 0;
    // $entre2    = $_POST["entreprenariat2"] ?? 0;
    // $anglais1  = $_POST["anglais1"] ?? 0;
    // $anglais2  = $_POST["anglais2"] ?? 0;
    // $soft1     = $_POST["softskills1"] ?? 0;
    // $soft2     = $_POST["softskills2"] ?? 0;

    
 
    // $etudiant = [
    // "nom" => $nom,
    // "prenom" => $prenom,
    // "date_naissance" => $date_naissance,
    // "filiere" => $filiere
    // ];



    // $notes = [
    // "frontend" => [$frontend1, $frontend2],
    // "backend" => [$backend1, $backend2],
    // "entreprenariat" => [$entreprenariat1, $entreprenariat2],
    // "anglais" => [$anglais1, $anglais2],
    // "softskills" => [$softskills1, $softskills2]
    // ];
    
    // if (!virifierNotes($notes)) {
    //     exit("Notes invalides");
    // }

    // $moyenne  = calculerMoyenneGenerale($notes);
    // $mention  = getMention($moyenne);
    // $decision = decisionFinale($moyenne);

    














    



    require "fonctions.php";

    
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        exit("Accès interdit");
    }

    /* 2️⃣ نفرض على user يعمّر كلشي (كود قصير) */
    $requiredFields = [
        "nom","prenom","date_naissance","filiere",
        "frontend1","frontend2",
        "backend1","backend2",
        "entreprenariat1","entreprenariat2",
        "anglais1","anglais2",
        "softskills1","softskills2"
    ];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            exit("Tous les champs sont obligatoires");
        }
    }

   
    $etudiant = [
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "date_naissance" => $_POST["date_naissance"],
        "filiere" => $_POST["filiere"]
    ];

    $notes = [
        "Frontend" => [$_POST["frontend1"], $_POST["frontend2"]],
        "Backend" => [$_POST["backend1"], $_POST["backend2"]],
        "Entreprenariat" => [$_POST["entreprenariat1"], $_POST["entreprenariat2"]],
        "Anglais" => [$_POST["anglais1"], $_POST["anglais2"]],
        "Soft Skills" => [$_POST["softskills1"], $_POST["softskills2"]]
    ];

   
    if (!virifierNotes($notes)) {
        exit("Notes invalides");
    }


    $moyenne  = calculerMoyenneGenerale($notes);
    $mention  = getMention($moyenne);
    $decision = decisionFinale($moyenne);

require "index.php";
exit;

?>