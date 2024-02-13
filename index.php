<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de contacts</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Gestion de contacts</h1>

    <!-- Formulaire pour ajouter ou éditer un contact -->
    <h2>Ajouter/Éditer un contact</h2>
    <form action="traitement.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone"><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse"><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br><br>

        <label for="pays">Pays :</label>
        <input type="text" id="pays" name="pays"><br><br>

        <label for="code_postal">Code Postal :</label>
        <input type="text" id="code_postal" name="code_postal"><br><br>

        <input type="submit" value="Enregistrer">
    </form>

    <!-- Formulaire pour afficher les contacts -->
    <h2>Liste des contacts</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Code Postal</th>
        </tr>
        <?php
        // Affichage des données dans le tableau
        if ($resultat->num_rows > 0) {
            while($row = $resultat->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["telephone"] . "</td>";
                echo "<td>" . $row["adresse"] . "</td>";
                echo "<td>" . $row["ville"] . "</td>";
                echo "<td>" . $row["pays"] . "</td>";
                echo "<td>" . $row["code_postal"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Aucun contact trouvé</td></tr>";
        }
        ?>
    </table>
</body>
</html>