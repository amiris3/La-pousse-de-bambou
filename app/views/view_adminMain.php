<!doctype html>
<html lang="en">
<?php require 'app/templates/head.php'; ?>
<body>
<?php require "app/templates/navbarAdmin.php";?>

<div class="container-fluid">
    <div class="row">
        <?php require "app/templates/sidebarAdmin.php";?>

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
                                <?php if (!empty($data[0])) { ?>
                                <h4><?= $data[0]->getObject() ?></h4>
                                <p><?= substr($data[0]->getMessage(),0, 50) . "..." ?></p>
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
                                <?php if (!empty($data[1])) { ?>
                                    <h4>pour le <?= $data[1]->getDate()?></h4>
                                    <p>pour <?= $data[1]->getClientsNb() ?> personnes</p>
                                <?php } else { ?>
                                    <h5>Vous n'avez aucune réservation</h5>
                                <?php } ?>
                                <a href="index.php?page=adminResa">Voir les réservations</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        <!-- ======= Last added dish ======= -->
                        <div class="col-lg-6 order-3 order-lg-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span>Dernier plat ajouté</span>
                                <?php if (!empty($data[2])) { ?>
                                <h4><?= $data[2]->getNomPlat() ?></h4>
                                <p><?= substr($data[2]->getDescription(),0, 50) . "..." ?></p>
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
                                <?php if (!empty($data[3])) { ?>
                                    <h4><?= $data[3]->getNomClient() ?></h4>
                                    <p> <?= $data[3]->getEmail() ?></p>
                                <?php } else { ?>
                                    <h5>Vous n'avez aucun clients</h5>
                                <?php } ?>
                                <a href="index.php?page=adminClients">Voir les clients</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Dashboard Section -->

        </main>
    </div>
</div>

<footer id="footer">
    <?php include "app/templates/footerBottom.php";?>
</footer>
<?php include "app/templates/scripts.php"; ?>
</body>
</html>