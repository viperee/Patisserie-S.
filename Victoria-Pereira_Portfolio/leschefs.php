<!DOCTYPE html>
<html lang="fr">
<?php $page = 'apropos'; ?>
<head>
    <title>Les Chefs</title>
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
            <img src="pictures/les_chefs/chefs-header.png">
            <div class="image-text-centered-bottom"><p class="image-text-header">Les<br> chefs</p></div>
        </div>
    </section>
    <section class="pb-5">
        <div class="container-fluid">
            <div class="row m-5">
                <div class="col-12 text-center">
                    <h3 class="apropos-h3">Venez<br>Découvrir</h3>
                </div>
            </div>
            <div class="row m-5 pb-4">
                <div class="col-12 text-center">
                    <p class="apropos-p">Dans le laboratoire ouvert sur la salle, qui comprends quelques tables, dans un cadre élégant et épuré, ils travaillent coude-à-coude: à
                        Satomi les crèmes et les mousses, à Stanley les pâtes.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-2">
                    <div class="apropos-sous-rectangle"></div>
                </div>
                <div class="col-5">
                    <h3 class="apropos-title color-heathered-grey pb-5">Dans le sillage de Joël Robuchon …</h3>
                    <p class="color-americano pt-5 w-80">Satomi est japonaise, Stanley taïwanais. A 36 ans, ils cumulent un beau parcours de chefs pâtissiers. Formée dans la
                        prestigieuse école parisienne Le Cordon Bleu, Satomi suivra ensuite pendant 13 ans Joël Robuchon, au Japon, à New-York, à Taïwan, où elle rencontre Stanley,
                        et finalement à Bordeaux, pour l’ouverture de La Grande Maison. Quand celui-ci est parti, ils ont décidé de rester. La ville leur plaisait. Pourquoi ne pas
                        s’y installer? C’est leur ami Gil Elad, l’un des chefs du Miles et du Mampuku, qui les a convaincus d’ouvrir leur propre pâtisserie. C’est chose faite
                        depuis décembre 2017, après une gestation qui a coïncidé avec l’arrivée de leur premier enfant. Leur marque de fabrique: la pâtisserie traditionnelle
                        française réalisée dans les règles de l’art, à laquelle vient s’ajouter une touche d’exotisme, avec un chou matcha, un rouleau japonais ou encore un aérien
                        shoku (pain de mie).</p>
                </div>
                <div class="col-5">
                    <img class="box-shadow-left" src="pictures/les_chefs/chefs.png">
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5">
        <div class="row m-0">
            <div class="col-3 p-0">
                <img src="pictures/les_chefs/chefs1.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/les_chefs/chefs2.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/les_chefs/chefs3.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/les_chefs/chefs4.png">
            </div>
        </div>
        <div class="row m-0">
            <div class="col-3 p-0">
                <img src="pictures/les_chefs/chefs5.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/les_chefs/chefs6.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/les_chefs/chefs7.png">
            </div>
            <div class="col-3 p-0">
                <img src="pictures/les_chefs/chefs8.png">
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