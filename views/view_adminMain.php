<!doctype html>
<html lang="en">
<?php require 'templates/head.php'; ?>
<body>
<?php require "templates/navbarAdmin.php";?>

<div class="container-fluid">
    <div class="row">
        <?php require "templates/sidebarAdmin.php";?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>

            </div>

            <!-- ======= Dahsboard Section ======= -->
            <section id="dashboard" class="dashboard">
                <div class="container" data-aos="fade-up">
                    <div class="row">

                        <!-- ======= Last Message received from the contact form ======= -->
                        <div class="col-lg-6 order-1 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span>Dernier message</span>
                                <?php if (!empty($message)) { ?>
                                <h4><?= $message[0]['object'] ?></h4>
                                <p><?= substr($message[0]['message'],0, 50) . "..." ?></p>
                                <?php } else { ?>
                                    <h5>Vous n'avez reçu aucun message</h5>
                                <?php } ?>
                                <a href="index.php?page=adminMessages">Voir les messages</a>
                            </div>
                        </div>

                        <!-- ======= Last Reservation order ======= -->
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span>Dernière réservation</span>

                                <h5>Aucune réservation n'est à venir</h5>

                                <a href="#">Voir les réservations</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        <!-- ======= Last added dish ======= -->
                        <div class="col-lg-6 order-3 order-lg-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span>Dernier plat ajouté</span>
                                <?php if (!empty($plat)) { ?>
                                <h4><?= $plat[0]['nom_plat'] ?></h4>
                                <p><?= substr($plat[0]['description'],0, 50) . "..." ?></p>
                                <?php } else { ?>
                                    <h5>Vous n'avez aucun plat enregistré</h5>
                                <?php } ?>
                                <a href="index.php?page=adminPlats">Voir les plats</a>
                            </div>
                        </div>

                        <!-- ======= Last client ======= -->
                        <div class="col-lg-6 pt-4 pt-lg-0 order-4 order-lg-4 content">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span>Dernier client</span>

                                <h5>Vous n'avez pas encore de clients</h5>

                                <a href="#">Voir les clients</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Dashboard Section -->

        </main>
    </div>
</div>

<footer id="footer">
    <?php include "templates/footerBottom.php";?>
</footer>
<?php include "templates/scripts.php"; ?>
</body>
</html>