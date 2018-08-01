<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$projects = getAllPays();

get_header("Liste des pays");
?>

<section class="container">
    <div class="destinations">
        <?php foreach ($pays as $sejour) : ?>
            <?php include 'include/sejour_inc.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>
