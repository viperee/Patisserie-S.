<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <?php include("head.php"); ?>
</head>
<body>
<div>
    <!--NAVBAR-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark">
                <img class="navbar-brand"
                     src="pictures/MJM-UI_PEREIRA-VICTORIA_Logotype-Simple-Iconographique-Noir.png">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
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
                    <div class="col-6 text-left">
                        <h1 class="h1-left text-brown">Entre culture et tradition</h1>
                        <p class="p-left text-brown">S comme Satomi et Stanley Chan, couple à la ville comme dans le
                            boulot, deux jeunes japonais qui se sont rencontrés sous les meilleurs auspices gourmands
                            qui soient… dans la brigade de Robuchon à l’ouverture de La Grande Maison. Deux super pros
                            (elle en pâtisserie, lui en boulangerie) qui se sont frottés aux plus grands et ont eu envie
                            de voler de leurs propres ailes.</p>
                        <button type="button" class="btn btn-primary btn-lg text-brown">En savoir plus</button>
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
            <h2 class="patisserie text-center text-brown">Les Pâtisseries
            </h2>
            <div class="container-sm">
                <div class="row">
                    <div class="col-2">
                        <img src="pictures/Gateaux.png"/>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <img src="pictures/Brunch.png"/>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <img src="pictures/Viennoiseries.png"/>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2">
                        <img src="pictures/Voyage.png"/>
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
                    <div class="col-6 text-left">
                        <h1 class="h1-left text-brown">Oui, chefs!</h1>
                        <p class="p-left text-brown">Le parcours respectif de Satomi et Stanley Chan est celui de
                            l’excellence auprès de Pierre Hermé, Joël Robuchon et Yannick Alléno. En 2014, ils arrivent
                            à Bordeaux pour l’ouvertur de La Grande Maison avec Joël Robuchon. Satomi sera la chef
                            pâtissière de ce restaurant et Stanley le chef boulanger.
                            <br/>En 2017, ils décident d’ouvrir leur propre pâtisserie salon de thé, au coeur de
                            Bordeaux, ville pour laquelle ils ont eu un véritable coups de coeur.</p>
                        <button type="button" class="btn btn-primary btn-lg text-brown">Voir les chefs</button>
                    </div>
                </div>
            </div>
        </section>
        <!--/SECTION Entre culture et tradition-->
    </div>
    <!--SECTION FOOTER-->
    <section class="footer-section p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 xs-padding">
                    <img class="navbar-brand" src="pictures/logo.png">
                    <p class="footer-text">ADDRESS: 100 Tenth Avenue, New York City,1001
                        <br>FOR BOOKING: (044) 359 0173</p>
                    <ul class="nav nav-icons">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-12 xs-padding">
                    <h4>Opening Hours</h4>
                    <p class="footer-text">Monday - Friday 11:30AM - 2:00PM <br>Saturday - Sunday 4:30PM - 10:00PM <br>Monday
                        - Friday 5:30PM - 11:00PM</p>
                </div>
                <div class="col-md-4 col-xs-12 xs-padding">
                    <h4>Subscribe to our contents</h4>
                    <div>
                        <form action="#">
                            <input type="email" name="email" class="form-input" placeholder="Email Address...">
                            <button type="submit" class="submit">SUBSCRIBE</button>
                        </form>
                        <p class="align-left footer-text">There are design companies and then there are user experience
                            design professional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/SECTION FOOTER-->
    <!--SECTION COPYRIGHT-->
    <footer class="footer-section p-4">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="copyright">© 2018 Barber Shop Powered by DynamicLayers</div>
                </div>
                <div class="col-4">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#">Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Report Problem</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/SECTION COPYRIGHT-->
</div>
<!--IMPORTS JS-->
<?php include("script.php") ?>
<!--/IMPORTS JS-->
</body>
</html>