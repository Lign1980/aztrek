<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$titre = $_POST["titre"];
$date_depart = $_POST["date_depart"];
$prix = $_POST["prix"];
$nb_places = $_POST["nb_places"];
$sejour_id = $_POST["sejour_id"];

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
insertSejour($titre, $image, $date_depart, $prix, $nb_places, $sejour_id);

// Redirection vers la liste
header("Location: index.php");
