<!DOCTYPE html>
<html lang="fr">
<?php require 'templates/head.php';  ?>

<body>
<?php require 'templates/header.php';  ?>

<main id="main">

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <div class="section-title">
                    <h2>A Propos</h2>
                </div>                <ol>
                    <li><a href="index.php">Accueil</a></li>
                    <li>A Propos</li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="../assets/img/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Ce que nous vous promettons</h3>
                    <p class="font-italic">
                        La pousse de bambou à La Rochelle est l'endroit idéal si vous êtes amateur des grandes spécialités
                        de la cuisine asiatique.
                    </p>
                    <ul>
                        <li><i class="icofont-check-circled"></i> une qualité des produits irréprochables</li>
                        <li><i class="icofont-check-circled"></i> un respect des recettes traditionnelles</li>
                        <li><i class="icofont-check-circled"></i> une expérience vous offrant les meilleurs éléments</li>
                    </ul>
                    <p>
                         Notre restaurant propose un succulent menu composé de
                        spécialités chinoises, thaïlandaises, vietnamiennes et japonaises que vous pourrez déguster
                        entre amis ou en famille, et toujours dans une ambiance des plus chaleureuses ! Afin de
                        réserver une table au restaurant La pousse de bambou, contactez-nous dès à présent.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pourquoi nous</h2>
                <p>Pourquoi choisir notre restaurant</p>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>La qualité</h4>
                        <p>Nos produits sont frais et sélectionnés parmi des producteurs locaux qui se sont engagés
                        à respecter l'environnement et leur production</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <span>02</span>
                        <h4>La tradition</h4>
                        <p>Nous avons fait des recherches extensives et sommes en lien avec des experts culinaires en
                            Asie pour vous faire profiter des meilleures recettes</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span>03</span>
                        <h4>L'expérience</h4>
                        <p>Nous n'engageons que des cuisiniers ayant un minimum de 5 ans d'expérience et issus des
                        formations les plus renommées</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Chefs</h2>
                <p>Nos chefs professionnels</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="../assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chef cuisinier</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <img src="../assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Patissière</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img src="../assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>Cuisinier</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Chefs Section -->

</main>
<?php require 'templates/footer.php';  ?>
</body>
</html>
