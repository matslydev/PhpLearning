<?php

// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// ID du contact à supprimer
$id_contact = 1;

// Requête de suppression
$sql = "DELETE FROM contacts WHERE id=$id_contact";

// Exécution de la requête
if ($connexion->query($sql) === TRUE) {
    echo "Contact supprimé avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}
?>