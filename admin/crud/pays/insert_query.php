<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST["libelle"];

//Upload de l'image
$image = $_FILES["image"] ["name"];
$tmp = $_FILES["image"] ["tmp_name"];

insertPays($libelle);

header("Location: index.php");