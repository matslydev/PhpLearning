<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// Données à insérer
$nom = "John Doe";
$email = "john@example.com";

// Requête d'insertion
$sql = "INSERT INTO contacts (nom, email) VALUES ('$nom', '$email')";

// Exécution de la requête
if ($connexion->query($sql) === TRUE) {
    echo "Nouveau contact ajouté avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}
?>