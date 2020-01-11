<!DOCTYPE html>
<html lang="fr">
<?php $page = 'apropos'; ?>
<head>
    <title>A Propos</title>
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

    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">Satomi & Stanley</h3>
                    <p class="chan-style">Chan</p>
                </div>
                <div class="col-6">
                    <p>Le parcours respectif de Satomi et Stanley Chan est celui de l’excellence auprès de Pierre Hermé, Joël Robuchon et Yannick Alléno. En 2014, ils arrivent à
                        Bordeaux pour l’ouverture de La Grande Maison avec Joël Robuchon. Satomi sera la chef pâtissière de ce restaurant et Stanley le chef boulanger. En 2017, ils
                        décident d’ouvrir leur propre pâtisserie salon de thé, au coeur de Bordeaux, pour laquelle ils ont eu un véritable coup de coeur.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="offset-2 col-3">
                <div class="box">
                    <img class="hover-style" src="pictures/gateau10.png">
                    <div class="image-text-centered"><p class="image-text">La pâtisserie</p></div>
                </div>
            </div>
            <div class="col-3">
                <div class="box">
                    <img class="hover-style" src="pictures/gateau9.png">
                    <div class="image-text-centered"><p class="image-text">La Culture Japonaise</p></div>
                </div>
            </div>
            <div class="col-3">
                <div class="box">
                    <img class="hover-style" src="pictures/chefs-small.png">
                    <div class="image-text-centered"><p class="image-text">Les Chefs</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-chiffre-cle">
        <div class="container">
            <div class="row">
                <div class="col-3 text-center">
                    <p class="counter">2789</p>
                    <span>Gâteaux créés</span>
                </div>
                <div class="col-3 text-center">
                    <p class="counter">2</p>
                    <span>Chefs</span>
                </div>
                <div class="col-3 text-center">
                    <p class="counter">4079</p>
                    <span>Heures passées</span>
                </div>
                <div class="col-3 text-center">
                    <p class="counter">8</p>
                    <span>Pâtisseries</span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="carousel-indicators-custom active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li class="carousel-indicators-custom" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li class="carousel-indicators-custom" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="pictures/gateau1.png" class="d-block w-20" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="pictures/gateau1.png" class="d-block w-20" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="pictures/gateau1.png" class="d-block w-20" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
<script src="node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
<script type="module" src="node_modules/jquery.counterup/jquery.counterup.min.js"></script>
<script src="js/apropos.js"></script>
</body>
</html>