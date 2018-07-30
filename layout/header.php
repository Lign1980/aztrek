<?php
require_once 'lib/functions.php';
$utilisateur = current_user();
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="...">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aztrek - <?php echo $title; ?></title>
    <link rel="shortcut icon" href="favicon/Plan de travail 1.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>


    <header class="header__container">

        <div class="header__firstnav container">

            <a href="#" id="header__nav--toogle" class="header__nav--toogle no__text">menu</a>
            <!-- css menu burger-->
            <a class="burger" href="#sidr-main">
                <i class="fa fa-bars" aria-hidden="true" cd></i>Menu
            </a>
            <a href="#" class="header__firstnav--logo--link">
                <img src="images/logo-aztrek-module-2.png" alt="LogoAztrek">
            </a>
        </div>

        <?php require_once 'layout/nav.php'; ?>
    </header>


    <main>