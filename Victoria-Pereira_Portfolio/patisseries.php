<!DOCTYPE html>
<html lang="fr">
<?php $page = 'patisseries'; ?>
<head>
    <title>Les Pâtisseries</title>
    <?php include("head.php"); ?>
</head>
<body>
<div>
    <!--NAVBAR-->
    <?php include("header.php") ?>
    <!--/NAVBAR-->

    <section class="section-titre background-color-chablis">
        <div>
            <h1 class="text-center">Les pâtisseries</h1>
        </div>
    </section>

    <section class="section-patisseries">
        <div class="container">
            <div class="text-center">
                <ul class="patisserie-nav">
                    <li class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Tous</a>
                    </li>
                    <li class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Gâteaux</a>
                    </li>
                    <li class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Viennoiseries</a>
                    </li>
                    <li class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Brunch</a>
                    </li>
                    <li class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Voyage</a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--SECTION FOOTER-->
    <?php include("footer.php"); ?>
    <!--/SECTION FOOTER-->
    <!--SECTION COPYRIGHT-->
    <?php include("copyright.php"); ?>
    <!--/SECTION COPYRIGHT-->
</div>
<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->
</body>
</html>