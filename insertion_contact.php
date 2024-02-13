<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// Données à insérer
$nom = $_POST['nom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$code_postal = $_POST['code_postal'];

// Requête d'insertion
$sql = "INSERT INTO contacts (nom, email, telephone, adresse, ville, pays, code_postal) 
        VALUES ('$nom', '$email', '$telephone', '$adresse', '$ville', '$pays', '$code_postal')";

// Exécution de la requête
if ($connexion->query($sql) === TRUE) {
    echo "Nouveau contact ajouté avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}
?>