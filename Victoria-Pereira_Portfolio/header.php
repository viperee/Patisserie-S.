<!--TODO Refaire la navbar-->
<header>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-md navbar-dark p-0">
            <img class="navbar-brand"
                 src="pictures/MJM-UI_PEREIRA-VICTORIA_Logotype-Simple-Iconographique-Noir.png">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    <li class="nav-item <?php echo ($page == 'accueil' ? "active" : "");?>">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item <?php echo ($page == 'patisseries' ? "active" : "");?>">
                        <a class="nav-link" href="patisseries.php">Les Pâtisseries</a>
                    </li>
                    <li class="nav-item <?php echo ($page == 'apropos' ? "active" : "");?>">
                        <a class="nav-link" href="apropos.php">A propos</a>
                    </li>
                    <li class="nav-item <?php echo ($page == 'contact' ? "active" : "");?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>