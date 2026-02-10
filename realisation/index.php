<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
      if (isset($moyenne)) {
   
    ?>

    <h2>Informations de l’étudiant</h2>
    <p><strong>Nom :</strong> <?= htmlspecialchars($etudiant["nom"]) ?></p>
    <p><strong>Prénom :</strong> <?= htmlspecialchars($etudiant["prenom"]) ?></p>
    <p><strong>Date de naissance :</strong> <?= htmlspecialchars($etudiant["date_naissance"]) ?></p>
    <p><strong>Filière :</strong> <?= htmlspecialchars($etudiant["filiere"]) ?></p>



    <br><br><br>
    <p>moyenne :<?= $moyenne ?> </p>
    <p>mention :<?=$mention ?> </p>
    <p>decision :<?= $decision ?> </p>



    <?php
       } else{
    ?> <h1>Formulaire Étudiant</h1>

    <form action="traitement.php" method="POST">

        <h3>Informations de l'étudiant</h3>


        <div>
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <br>

        <div> <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <br>
        <div>
            <label for="date_naissance">date_naissance</label>
            <input type="date" id="date_naissance" name=" date_naissance" required>
        </div>
        <br>
        <div>
            <label for="filiere">filiere</label>
            <input type="text" id="filiere" name="filiere" required>
        </div>
        <hr>

        <h3>Notes</h3>

        <table border="1" cellpadding="8">
            <tr>
                <th>Matière</th>
                <th>Note 1</th>
                <th>Note 2</th>
            </tr>

            <tr>
                <td>Frontend</td>
                <td><input type="number" name="frontend1" min="0" max="20" step="0.01" required></td>
                <td><input type="number" name="frontend2" min="0" max="20" step="0.01" required></td>
            </tr>

            <tr>
                <td>Backend</td>
                <td><input type="number" name="backend1" min="0" max="20" step="0.01" required></td>
                <td><input type="number" name="backend2" min="0" max="20" step="0.01" required></td>
            </tr>

            <tr>
                <td>Entreprenariat</td>
                <td><input type="number" name="entreprenariat1" min="0" max="20" step="0.01" required></td>
                <td><input type="number" name="entreprenariat2" min="0" max="20" step="0.01" required></td>
            </tr>

            <tr>
                <td>Anglais</td>
                <td><input type="number" name="anglais1" min="0" max="20" step="0.01" required></td>
                <td><input type="number" name="anglais2" min="0" max="20" step="0.01" required></td>
            </tr>

            <tr>
                <td>Soft Skills</td>
                <td><input type="number" name="softskills1" min="0" max="20" step="0.01" required></td>
                <td><input type="number" name="softskills2" min="0" max="20" step="0.01" required></td>
            </tr>
        </table>

        <br>

        <button type="submit">Calculer la moyenne</button>
    </form>

    <?php
}
?>

</body>

</html>