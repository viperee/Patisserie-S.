<!DOCTYPE html>
<html lang="fr">
<?php $page = 'contact'; ?>
<head>
    <title>Contact</title>
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

    <section class="p-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-6">
                    <h3 class="text-center color-heathered-grey pb-5">Nous rendre visite</h3>
                    <p class="pb-4 m-0 presentation-contact paragraph-separator">Labo ouvert sur les six tables du salon de thé au design impeccable, où l’on vient s’offrir un thé accompagné d’oyatsus ou d’un saint-honoré dont la vanille
                        de Tahiti enchante le palais.</p>
                    <div class="offset-3">
                        <div class="mt-4 mb-1">
                            <span><img class="footer-company-infos-icons" src="icons/call-heathered-grey.svg"></span><span class="align-middle ml-2">05 56 06 94 54</span>
                        </div>
                        <div class="mb-1">
                            <span><img class="footer-company-infos-icons" src="icons/email-heathered-grey.svg"></span><span class="align-middle ml-2">satomiandstanley@gmail.com</span>
                        </div>
                        <div class="mb-1">
                            <span><img class="footer-company-infos-icons" src="icons/cupcake-heathered-grey.svg"></span><span class="align-middle ml-2">www.satomiandstanley.com</span>
                        </div>
                        <div class="mb-1">
                            <span><img class="footer-company-infos-iconss" src="icons/placeholder-heathered-grey.svg"></span><span class="align-middle ml-2">8 Cours Alsace Lorraine</span><span class="d-block" style="margin-left: 2em;">33000 Bordeaux</span>
                        </div>
                        <div class="mb-1">
                            <span><img class="footer-company-infos-iconss" src="icons/tramway-heathered-grey.svg"></span><span class="align-middle ml-2">Tram A | Bus 24 | Bus A</span>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-4">
                    <h3 class="text-center color-heathered-grey pb-5">Nous contacter</h3>
                    <form>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-contact" placeholder="Nom">
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-contact" placeholder="Prénom">
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-contact" placeholder="Adresse mail">
                        </div>
                        <div class="form-group row">
                            <textarea class="form-control form-control-contact" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class="pt-5 text-center">
                            <button type="submit" class="btn btn-primary btn-submit-contact">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid p-0">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.202337903689!2d-0.5707458844634234!3d44.83781257909866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527ce79154017%3A0xe222f2fd42be5ae3!2sP%C3%A2tisserie%20S.!5e0!3m2!1sfr!2sfr!4v1578681626494!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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