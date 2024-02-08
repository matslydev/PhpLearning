<?php

// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// Nouvelles données du contact
$nouveau_nom = "Jane Doe";
$nouvel_email = "jane@example.com";

// Requête de mise à jour
$sql = "UPDATE contacts SET nom='$nouveau_nom', email='$nouvel_email' WHERE id=1";

// Exécution de la requête
if ($connexion->query($sql) === TRUE) {
    echo "Contact mis à jour avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}
?>