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
                    <p class="sacramento-style">Chan</p>
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
                    <a href="lapatisserie.php">
                        <img class="hover-style" src="pictures/gateau10.png">
                        <div class="image-text-centered"><p class="image-text">La<br> pâtisserie</p></div>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="box">
                    <a href="laculturejaponaisse.php">
                        <img class="hover-style" src="pictures/gateau9.png">
                        <div class="image-text-centered"><p class="image-text">La Culture Japonaise</p></div>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="box">
                    <a href="leschefs.php">
                        <img class="hover-style" src="pictures/chefs-small.png">
                        <div class="image-text-centered"><p class="image-text">Les Chefs</p></div>
                    </a>
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
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center pb-5 pt-5"><img src="icons/quote.png">
                            </div>
                            <div class="offset-3 col-6 text-center pb-2"><p class="text-left">
                                    Dans un charmant salon de pierres apparentes (les voûtes bordelaises) venez profiter d’une pause gourmande apaisante! Savourez le bavarois
                                    rouge, subtil et parfaitement équilibré, en sirotant un thé glacé aux fruits rouges! Puis, après avoir repris des forces, repartez avec un
                                    véritable melon pan japonais, savoureuse brioche qui égayera votre petit-déjeuner! Prix très corrects par rapport à la qualité des produits et à
                                    l’excellence du savoir-faire! Bravo et à très bientôt !
                                </p></div>
                            <div class="col-12 text-center pb-5">
                                <h3 class="pb-5">Daniel Malartrigue</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center pb-5 pt-5"><img src="icons/quote.png">
                            </div>
                            <div class="offset-3 col-6 text-center pb-2"><p class="text-left">
                                    Dans un charmant salon de pierres apparentes (les voûtes bordelaises) venez profiter d’une pause gourmande apaisante! Savourez le bavarois
                                    rouge, subtil et parfaitement équilibré, en sirotant un thé glacé aux fruits rouges! Puis, après avoir repris des forces, repartez avec un
                                    véritable melon pan japonais, savoureuse brioche qui égayera votre petit-déjeuner! Prix très corrects par rapport à la qualité des produits et à
                                    l’excellence du savoir-faire! Bravo et à très bientôt !
                                </p></div>
                            <div class="col-12 text-center pb-5">
                                <h3 class="pb-5">Daniel Malartrigue</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="apropos-carousel-control-prev carousel-control-prev pl-5" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="apropos-carousel-control-prev-icon" aria-hidden="true"><</span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="apropos-carousel-control-next carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="apropos-carousel-control-next-icon" aria-hidden="true">></span>
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