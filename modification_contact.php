<?php

// Inclure le fichier de connexion à la base de données
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id_contact = $_POST['id_contact']; // L'identifiant du contact à mettre à jour
    $nouveau_nom = $_POST['nom'];
    $nouvel_email = $_POST['email'];
    $nouveau_telephone = $_POST['telephone'];
    $nouvelle_adresse = $_POST['adresse'];
    $nouvelle_ville = $_POST['ville'];
    $nouveau_pays = $_POST['pays'];
    $nouveau_code_postal = $_POST['code_postal'];

    // Requête de mise à jour
    $sql = "UPDATE contacts 
            SET nom='$nouveau_nom', 
                email='$nouvel_email', 
                telephone='$nouveau_telephone', 
                adresse='$nouvelle_adresse', 
                ville='$nouvelle_ville', 
                pays='$nouveau_pays', 
                code_postal='$nouveau_code_postal' 
            WHERE id=$id_contact";

    // Exécution de la requête
    if ($connexion->query($sql) === TRUE) {
        echo "Contact mis à jour avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . $connexion->error;
    }
} else {
    // Si aucune donnée n'a été soumise via le formulaire, afficher un message d'erreur
    echo "Erreur : Aucune donnée soumise";
}

?>