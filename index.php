<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Gestion des notes</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
        font-family: Arial;
        margin: 30px;
    }

    table {
        border-collapse: collapse;
        margin-top: 15px;
    }

    td,
    th {
        border: 1px solid #000;
        padding: 8px;
        text-align: center;
    }

    h2 {
        margin-top: 30px;
    }
    </style>
</head>

<body>

    <?php
/* =========================
   AFFICHAGE DES RÉSULTATS
   ========================= */
if (isset($moyenne)): 
?>

    <h1>Résultat Final</h1>

    <h2>Informations de l’étudiant</h2>
    <ul>
        <li><strong>Nom :</strong> <?= $etudiant["nom"] ?></li>
        <li><strong>Prénom :</strong> <?= $etudiant["prenom"] ?></li>
        <li><strong>Date de naissance :</strong> <?= $etudiant["date_naissance"] ?></li>
        <li><strong>Filière :</strong> <?= $etudiant["filiere"] ?></li>
    </ul>

    <h2>Tableau des notes</h2>
    <table>
        <tr>
            <th>Matière</th>
            <th>Note 1</th>
            <th>Note 2</th>
        </tr>

        <?php foreach ($notes as $matiere => $listeNotes): ?>
        <tr>
            <td><?= $matiere ?></td>
            <td><?= $listeNotes[0] ?></td>
            <td><?= $listeNotes[1] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Moyenne générale</h2>
    <p><?= round($moyenne, 2) ?>/20</p>

    <h2>Mention</h2>
    <p><?= $mention ?></p>

    <h2>Décision finale</h2>
    <strong><?= $decision ?></strong>

    <br><br>
    <a href="index.php">⬅ Retour au formulaire</a>

    <?php 
/* =========================
   FORMULAIRE
   ========================= */
 else: 
?>

    <h1>Formulaire de saisie</h1>

    <form method="POST" action="traitement.php">

        <h2>Informations étudiant</h2>
        <input type="text" name="nom" placeholder="Nom" required><br><br>
        <input type="text" name="prenom" placeholder="Prénom" required><br><br>
        <input type="date" name="date_naissance" required><br><br>
        <input type="text" name="filiere" placeholder="Filière" required><br><br>

        <h2>Notes</h2>

        <strong>Frontend</strong><br>
        <input type="number" name="frontend1" min="0" max="20" required>
        <input type="number" name="frontend2" min="0" max="20" required><br><br>

        <strong>Backend</strong><br>
        <input type="number" name="backend1" min="0" max="20" required>
        <input type="number" name="backend2" min="0" max="20" required><br><br>

        <strong>Entreprenariat</strong><br>
        <input type="number" name="entreprenariat1" min="0" max="20" required>
        <input type="number" name="entreprenariat2" min="0" max="20" required><br><br>

        <strong>Anglais</strong><br>
        <input type="number" name="anglais1" min="0" max="20" required>
        <input type="number" name="anglais2" min="0" max="20" required><br><br>

        <strong>Soft Skills</strong><br>
        <input type="number" name="softskills1" min="0" max="20" required>
        <input type="number" name="softskills2" min="0" max="20" required><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php endif; ?>

</body>

</html>