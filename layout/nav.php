<nav class="header__secondnav" role="navigation">
    <ul class="header__secondnav--menu container">
        <li>
            <a href="index.php" class="header__secondnav--link">Accueil</a>
        </li>
        <li>
            <a href="#" class="header__secondnav--link">Qui sommes-nous</a>
        </li>
        <li>
            <a href="liste_pays.php" class="header__secondnav--link">Destinations</a>
        </li>
        <li>
            <a href="#" class="header__secondnav--link">Inscription</a>
        </li>
        <li>
            <a href="#" class="header__secondnav--link">Contact</a>
        </li>
        <?php if (empty($utilisateur)) : ?>
            <li>
                <a href="admin/register.php" class="header__secondnav--link">
                    <i class="fa fa-user-plus"></i>
                    Créer un compte
                </a>
            </li>
            <li>
                <a href="admin/login.php" class="header__secondnav--link">
                    <i class="fa fa-sign-in"></i>
                    Se connecter
                </a>
            </li>
        <?php else: ?>
            <?php if ($utilisateur["admin"] == 1) : ?>
                <li>
                    <a href="admin/">
                        <i class="fa fa-cogs"></i>
                        Administration
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="admin/logout.php">
                    <i class="fa fa-sign-out"></i>
                    Déconnexion
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>