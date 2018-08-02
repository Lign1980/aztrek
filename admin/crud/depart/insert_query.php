<?php
require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire

$date_depart = $_POST["date_depart"];
$prix = $_POST["prix"];
$nb_places = $_POST["nb_places"];
$sejour_id = $_POST["sejour_id"];

/* Upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $image);*/

// Enregistrement en base de données
insertDepart($date_depart, $prix, $nb_places, $sejour_id);

// Redirection vers la liste
header("Location: index.php");