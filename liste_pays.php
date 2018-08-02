<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntities("pays");

get_header("Liste des Pays");
?>

<main class=“container”>

    <div class="grid">
        <?php foreach ($list_pays as $pays) : ?>
            <article>
                <h2><?php echo $pays ["libelle"]; ?></h2>
                <img src="<?php echo SITE_URL . "/uploads/" . $pays["image"]; ?>" class=“img-thumbnail”>
            </article>
        <?php endforeach; ?>
    </div>

</main>
