<!DOCTYPE html>
<html lang="fr">
<?php $page = 'apropos'; ?>
<head>
    <title>La Pâtisserie</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/apropos.css">
</head>
<body>
<div>
    <!--NAVBAR-->
    <?php include("header.php") ?>
    <!--/NAVBAR-->
    <section class="pb-4">
        <div class="box-no-hover">
            <img src="pictures/patisseries/patisserie-header.png">
            <div class="image-text-centered-bottom"><p class="image-text-header">La<br> pâtisserie</p></div>
        </div>
    </section>
    <section class="article pb-5">
        <div class="container-fluid">
            <div class="row m-5">
                <div class="col-12 text-center">
                    <h3 class="apropos-h3">Venez<br>Découvrir</h3>
                </div>
            </div>
            <div class="row m-5 pb-4">
                <div class="col-12 text-center">
                    <p class="apropos-p text-capitalize">Le salon, qui vous accueillelle dans un décor design, à tout moment de la journée, pour une pause gourmande et raffinée.<br>Venez déguster nos créations
                        originales et pâtisseries franco-japonaises, tout en regardant l’équipe travailler dans le laboratoire ouvert.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-2">
                    <div class="apropos-sous-rectangle"></div>
                </div>
                <div class="col-5">
                    <h3 class="apropos-title color-heathered-grey pb-5">Pause gourmande à la Pâtisserie S. …</h3>
                    <p class="color-americano pt-5 w-80">Ouverte en tout fin d’année dernière, la Pâtisserie S. a conquise les gourmands bordelais. Si la proposition initiale de cette pâtisserie et salon de thé
                        repose sur des classiques, il est à noter qu’ils sont réalisés dans une parfaite maîtrise des techniques pâtissière. De fait, ce couple nippon-taïwanais,
                        issu des brigades de Joël Robuchon, allie savoir-faire pâtissier, pour Satomi, et boulanger, pour Stanley. Un duo que l’on prends plaisir à voir travailler
                        en direct tout au long de la journée, alors que l’atelier est ouvert sur la boutique. Une production réalisée avec selon les besoins, qui permet de « ne
                        proposer que de l’hyper-qualité »,, justifie Satomi Chan, très « attachée au respect des traditions culinaires françaises ». De petits plaisirs que la
                        pâtisserie décline autour de brunchs sucrés à compter de ce printemps, les week-ends, avant de proposer un menu sucré, sur le modèle de la restauration, dès
                        le mois prochain.</p>
                </div>
                <div class="col-5">
                    <img class="box-shadow-left" src="pictures/patisseries/patisserie1.png">
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5">
        <div class="row m-0">
            <div class="col-3 p-0">
                <img src="pictures/patisseries/patisserie2.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/patisseries/patisserie3.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/patisseries/patisserie4.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/patisseries/patisserie5.png">
            </div>
        </div>
        <div class="row m-0">
            <div class="col-3 p-0">
                <img src="pictures/patisseries/patisserie6.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/patisseries/patisserie7.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/patisseries/patisserie8.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/patisseries/patisserie9.png">
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