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

    <!--TITRE-->
    <?php include("sectiontitre.php") ?>
    <!--/TITRE-->

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
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="col-12">
                        <img class="patisserie-img" src="pictures/gateau1.png">
                    </div>
                    <div class="col-12">
                        <img class="patisserie-img" src="pictures/gateau2.png">
                    </div>
                    <div class="col-12">
                        <img class="patisserie-img" src="pictures/gateau3.png">
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-12">
                        <img class="patisserie-img" src="pictures/gateau4.png">
                    </div>
                    <div class="col-12">
                        <img class="patisserie-img" src="pictures/gateau5.png">
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-12">
                        <img class="patisserie-img" src="pictures/gateau6.png">
                    </div>
                    <div class="col-12">
                        <img class="patisserie-img" src="pictures/gateau7.png">
                    </div>
                    <div class="col-12">
                        <img class="patisserie-img" src="pictures/gateau8.png">
                    </div>
                </div>
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