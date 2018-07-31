<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_POST["id"];
$titre = $_POST["titre"];
$date_debut = $_POST["date_debut"];
$date_fin = $_POST["date_fin"];
$prix = $_POST["prix"];
$description = $_POST["description"];
$pays_id = $_POST["pays_id"];

// Upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("projet", $id);
    $image = $sejour["image"];
} else {
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];

    move_uploaded_file($tmp, "../../../uploads/" . $image);
}

// Enregistrement en base de données
updateSejour($id, $titre, $image, $date_debut, $date_fin, $prix, $description, $categorie_id);

// Redirection vers la liste
header("Location: index.php");
