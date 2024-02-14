<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// Vérifier si des données ont été soumises via le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
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
} else {
    // Si aucune donnée n'a été soumise via le formulaire, afficher un message d'erreur
    echo "Erreur : Aucune donnée soumise";
}

?>