<!DOCTYPE html>
<html lang="fr">
<?php $page = 'accueil'; ?>
<head>
    <title>Accueil</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/accueil.css">
</head>
<body>
<div>
    <!--NAVBAR-->
    <?php include("header.php") ?>
    <!--/NAVBAR-->

    <!--PRESENTATION EN IMAGES-->
    <section id="presentation">
        <div>
            <img src="pictures/MJM-UI_PEREIRA-VICTORIA_Logotype-Simple-Baseline-Blanc.png"
                 class="logo-accueil mx-auto d-block">
            <a href="#EntreCultureEtTradition"><img src="icons/bas.png" class="ancre-bas mx-auto d-block"></a>
        </div>
    </section>
    <div class="main main-raised">
        <!--SECTION Entre culture et tradition-->
        <section id="EntreCultureEtTradition">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <img src="pictures/chochin.jpg" class="chochin" alt="Responsive image">
                    </div>
                    <div class="col-1">
                        <div class="rectangle"></div>
                    </div>
                    <div class="col-6">
                        <h3 class="align-strip color-heathered-grey">Entre culture et tradition</h3>
                        <p class="color-heathered-grey text-block mb-5">S comme Satomi et Stanley Chan, couple à la ville comme dans le
                            boulot, deux jeunes japonais qui se sont rencontrés sous les meilleurs auspices gourmands
                            qui soient… dans la brigade de Robuchon à l’ouverture de La Grande Maison. Deux super pros
                            (elle en pâtisserie, lui en boulangerie) qui se sont frottés aux plus grands et ont eu envie
                            de voler de leurs propres ailes.</p>
                        <button type="button" class="btn btn-primary btn-lg button-raleway-regular-style color-heathered-grey">En savoir plus</button>
                    </div>
                </div>
            </div>
        </section>
        <!--/SECTION Entre culture et tradition-->
    </div>
    <!--/PRESENTATION EN IMAGES-->
    <!--SECTION Patisseries-->
    <section id="patisseries">
        <div class="container">
            <h2 class="patisserie text-center color-heathered-grey">Les Pâtisseries
            </h2>
            <div class="container-sm">
                <div class="row">
                    <div class="col-2">
                        <a href="patisseries.php?categorie=gateaux">
                            <div class="hover">
                                <div class="image-text-centered"><p class="image-text">Gâteaux</p></div>
                            </div>
                            <img class="accueil-patisseries-img" src="pictures/Gateaux.png" alt="Gateaux"/>
                        </a>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <a href="patisseries.php?categorie=viennoiseries">
                            <div class="hover">
                                <div class="image-text-centered"><p class="image-text">Viennoiseries</p></div>
                            </div>
                            <img class="accueil-patisseries-img" src="pictures/viennoiseries.png"/>
                        </a>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <a href="patisseries.php?categorie=brunch">
                            <div class="hover">
                                <div class="image-text-centered"><p class="image-text">Brunch</p></div>
                            </div>
                            <img class="accueil-patisseries-img" src="pictures/brunch.png"/>
                        </a>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <a href="patisseries.php?categorie=voyage">
                            <div class="hover">
                                <div class="image-text-centered"><p class="image-text">Voyage</p></div>
                            </div>
                            <img class="accueil-patisseries-img" src="pictures/Voyage.png"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/SECTION SLOGAN-->
    <div class="main main-raised">
        <!--SECTION Présentation des chefs-->
        <section id="presentation_chefs">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <img src="pictures/Devanture.png" class="chochin" alt="Responsive image">
                    </div>
                    <div class="col-1">
                        <div class="rectangle2"></div>
                    </div>
                    <div class="col-6 padding-top-text-block">
                        <h3 class="color-heathered-grey">Oui, Chef!</h3>
                        <p class="p-left color-heathered-grey text-block pb-1">Le parcours respectif de Satomi et Stanley Chan est celui de
                            l’excellence auprès de Pierre Hermé, Joël Robuchon et Yannick Alléno. En 2014, ils arrivent
                            à Bordeaux pour l’ouvertur de La Grande Maison avec Joël Robuchon. Satomi sera la chef
                            pâtissière de ce restaurant et Stanley le chef boulanger.
                            <br/>En 2017, ils décident d’ouvrir leur propre pâtisserie salon de thé, au coeur de
                            Bordeaux, ville pour laquelle ils ont eu un véritable coups de coeur.</p>
                        <p class="sacramento-style">Satomi & Stanley</p>
                        <p class="color-americano pb-2">Pâtissière & Boulanger</p>
                        <button type="button" class="btn btn-primary btn-lg button-raleway-regular-style color-heathered-grey">Voir les chefs</button>
                    </div>
                </div>
            </div>
        </section>
        <!--/SECTION Entre culture et tradition-->
    </div>
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