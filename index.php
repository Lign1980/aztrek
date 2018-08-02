<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntities("pays");
$list_sejours = getBestSejours(3);


get_header("Accueil");
?>

<section class="section1">
    <div class="visuel">
        <h1>Chaque pas nous rapproche </h1>

    </div>

    <h2>Les incontournables que vous aimez</h2>

    <div class="first_section">
        <div class="container">
            <?php foreach ($list_sejours as $sejour) : ?>
                <article class="photo">
                    <figure class="photo_entete1">
                        <a href="">
                            <img class="photo_img" src="uploads/<?php echo $sejour["image"]; ?>" alt="">
                        </a>
                        <figcaption class="photo_contenu1">
                            <h3 class="photo_titre"><?php echo $sejour["titre"]; ?></h3>
                            <p class="photo_jours">8 jours à partir de <?php echo $sejour["prix"]; ?>€</p>
                            <p class="photo_prix">Difficulté : <?php echo $sejour["difficultee"]; ?></p>
                            <p class="photo_prix">Prochain départ le <?php echo $sejour["date_depart"]; ?></p>
                        </figcaption>
                        <a class="photo_liens" href="pages-2.html">Par ici l'aventure!</a>
                    </figure>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<section class="section2">
    <div class="section2__title">
        
        <h2>Coup de Coeur</h2>
        <p>Guatémala</p>
        <p>Le Trek Maya</p>
        <a class="photo_Guatemala" href="pages-4.html">Ca me tente!</a>
    </div>
</section>


<section class="section3">

    <div class="section3__ntrek">
        <div class="second_section">
            
            <article class="photo">
                <figure class="photo_entete4">
                    <a href="">
                        <img class="photo_img" src="images/Salvador.png" alt="">
                    </a>
                    <figcaption class="photo_contenu">
                        <h2 class="photo_titre">Salvador</h2>
                        <p class="photo_jours">8 jours à partir de 1500€</p>
                        <p class="photo_prix">Difficulté
                            <img src="images/shoes.png" alt="">
                        </p>
                        <p class="photo_prix">Prochain départ le 24/07/18</p>
                    </figcaption>
                    <a class="photo_liens" href="pages-2.html">Vite j'en profite!</a>
                </figure>
            </article>

            <article class="photo">
                <figure class="photo_entete5">
                    <a href="">
                        <img class="photo_img" src="images/Honduras .png" alt="">
                    </a>
                    <figcaption class="photo_contenu">
                        <h2 class="photo_titre">Honduras</h2>
                        <p class="photo_jours">8 jours à partir de 1500€</p>
                        <p class="photo_prix">Difficulté
                            <img src="images/shoes.png" alt="">
                        </p>
                        <p class="photo_prix">Prochain départ le 24/07/18</p>
                    </figcaption>
                    <a class="photo_liens photo_lien-une" href="pages-3.html">Vite j'en profite!</a>
                </figure>
            </article>

            <article class="photo">
                <figure class="photo_entete6">
                    <a href="">
                        <img class="photo_img" src="images/Costa_Rica.png" alt="">
                    </a>
                    <figcaption class="photo_contenu">
                        <h3 class="photo_titre">Costas Rica</h3>
                        <p class="photo_jours">8 jours à partir de 1500€</p>
                        <p class="photo_prix">Difficulté
                            <img src="images/shoes.png" alt="">
                        </p>
                        <p class="photo_prix">Prochain départ le 24/07/18</p>
                    </figcaption>
                    <a class="photo_liens" href="pages-4.html">Vite j'en profite!</a>
                </figure>
            </article>
            
        </div>
    </div>
</section>

<section class="section4">
    <div class="section_communaute">
        <h2>Rêveons,voyageons,partageons</h2>
        <p>#AZTREK sur Instagram</p>

        <a class="photo_liens" href="">
            <img src="images/Instagram.png" alt=""> PARTAGEONS NOS EXPERIENCE</a>
    </div>

    <div class="section4__communaute">
        <div class="second_section">
            <article class="photo_entete container">
                <figure class="photo_entete7">
                    <a href="">
                        <img class="photo_img1.photo" src="images/texte.png" alt="">
                        <figcaption>
                            <p>« Chaque pas nous rapproche » C’est prendre le temps d’observer, de comprendre, de sentir.
                                Mais c’est aussi et surtout échanger, rencontrer l’autre, partager, parfois se lier
                                d’amitié. Et, en fin de compte, se trouver soi-même.</p>
                        </figcaption>
                    </a>
                </figure>
                <div class="photo-entete-x4">
                    <figure class="photo_entete8">
                        <a href="">
                            <img class="photo_img" src="images/idee_circuits.png" alt="">
                            <figcaption>Idée de Circuits</figcaption>
                        </a>
                    </figure>
                    <figure class="photo_entete9">
                        <a href="">
                            <img class="photo_img" src="images/Rencontres.png" alt="">
                            <figcaption>Rencontres</figcaption>
                        </a>
                    </figure>

                    <figure class="photo_entete10">
                        <a href="">
                            <img class="photo_img" src="images/les_bons_plans.png" alt="">
                            <figcaption>Les bons plans</figcaption>
                        </a>
                    </figure>
                    <figure class="photo_entete11">
                        <a href="">
                            <img class="photo_img" src="images/Conseils_voyages.png" alt="">
                            <figcaption>Conseils Voyage</figcaption>
                        </a>
                    </figure>
                </div>
            </article>
            
        </div>
</section>


<section class="section4 container">

    <article class="section4__slider">
        <h2>Avis Voyageurs </h2>
        <div class="section4__slider--item owl-carousel">
            <img src="images/carroussel_1.png" alt="Yannis" class="section4__img">

            <img src="images/carroiussel_2.png" alt="Mohamed" class="section4__img">

            <img src="images/carroussel_3.png" alt="Eddy" class="section4__img">
        </div>

    </article>

</section>

