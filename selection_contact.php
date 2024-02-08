<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// Requête de sélection
$sql = "SELECT * FROM contacts";

// Exécution de la requête
$resultat = $connexion->query($sql);

// Vérification des résultats et affichage
if ($resultat->num_rows > 0) {
    while($row = $resultat->fetch_assoc()) {
        echo "Nom: " . $row["nom"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "Aucun résultat trouvé";
}
?>