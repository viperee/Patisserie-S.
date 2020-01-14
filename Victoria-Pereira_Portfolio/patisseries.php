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
    <section class="section-patisseries pb-5">
        <div class="container">
            <div class="text-center">
                <ul class="patisserie-nav">
                    <li id="tous_categorie" class="patisserie-nav-item active-categorie">
                        <a class="patisserie-nav-link" href="#">Tous</a>
                    </li>
                    <li id="gateaux_categorie" class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Gâteaux</a>
                    </li>
                    <li id="viennoiseries_categorie" class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Viennoiseries</a>
                    </li>
                    <li id="brunch_categorie" class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Brunch</a>
                    </li>
                    <li id="voyage_categorie" class="patisserie-nav-item">
                        <a class="patisserie-nav-link" href="#">Voyage</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php include("gateau.php") ?>
        <?php include("brunch.php") ?>
        <?php include("voyage.php") ?>
        <?php include("viennoiseries.php") ?>
    </section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-full">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row pt-4 pb-5">
                                    <div class="col-1">
                                    </div>
                                    <div class="col-4 pt-5 pb-5">
                                        <img class="chochin-modal mb-0" src="pictures/modal/modal1.png">
                                    </div>
                                    <div class="col-1">
                                        <div class="rectangle-modal"></div>
                                    </div>
                                    <div class="col-5">
                                        <h3 class="modal-custom-title modal-padding-top">Forêt rouge</h3>
                                        <img class="pr-3" src="pictures/modal/modal1-current.png">
                                        <img class="" src="pictures/modal/modal1-next.png">
                                        <p class="pt-5"><b>INFORMATION SUR LE PRODUIT</b></p>
                                        <p class="modal-presentation">Une mousse mascarpone avec un cœur coulant aux fruits rouges posé sur un sablé breton donne à ce dessert la légereté d’un
                                            nuage avec toute la saveur du fruit.</p>
                                    </div>
                                    <div class="col-1">

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row pt-4 pb-5">
                                    <div class="col-1">
                                    </div>
                                    <div class="col-4 pt-5 pb-5">
                                        <img class="chochin-modal mb-0" src="pictures/modal/modal1.png">
                                    </div>
                                    <div class="col-1">
                                        <div class="rectangle-modal"></div>
                                    </div>
                                    <div class="col-5">
                                        <h3 class="modal-custom-title modal-padding-top">Tarte aux framboises</h3>
                                        <img class="pr-3" src="pictures/modal/modal1-current.png">
                                        <img class="" src="pictures/modal/modal1-next.png">
                                        <p class="pt-5"><b>INFORMATION SUR LE PRODUIT</b></p>
                                        <p class="modal-presentation">Une mousse mascarpone avec un cœur coulant aux fruits rouges posé sur un sablé breton donne à ce dessert la légereté d’un
                                            nuage avec toute la saveur du fruit.</p>
                                    </div>
                                    <div class="col-1">

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row pt-4 pb-5">
                                    <div class="col-1">
                                    </div>
                                    <div class="col-4 pt-5 pb-5">
                                        <img class="chochin-modal mb-0" src="pictures/modal/modal1.png">
                                    </div>
                                    <div class="col-1">
                                        <div class="rectangle-modal"></div>
                                    </div>
                                    <div class="col-5">
                                        <h3 class="modal-custom-title modal-padding-top">Chou matcha</h3>
                                        <img class="pr-3" src="pictures/modal/modal1-current.png">
                                        <img class="" src="pictures/modal/modal1-next.png">
                                        <p class="pt-5"><b>INFORMATION SUR LE PRODUIT</b></p>
                                        <p class="modal-presentation">Une mousse mascarpone avec un cœur coulant aux fruits rouges posé sur un sablé breton donne à ce dessert la légereté d’un
                                            nuage avec toute la saveur du fruit.</p>
                                    </div>
                                    <div class="col-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="modal-carousel-control-prev carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="modal-carousel-control-prev-icon" aria-hidden="true"><</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="modal-carousel-control-next carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="modal-carousel-control-next-icon" aria-hidden="true">></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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