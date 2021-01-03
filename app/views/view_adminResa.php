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
                <h1 class="h2">Réservations</h1>
            </div>

            <!-- ======= Messages Section ======= -->
            <section id="dashboard" class="dashboard">
                <div class="container" data-aos="fade-up">
                    <div class="row">

                    <?php foreach ($reservations as $key => $resa) {
                        $dt = new DateTime($resa->getDate());
                        $date = $dt->format('d/m/Y');
                        $time = $dt->format('H:i');
                        $space = count($reservations) < 3 ? 'space' : '';
                        ?>
                        <div class="col-lg-6 order-<?=$key?> order-lg-<?=$key?> <?=$space?>" data-aos="zoom-in">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span>Réservation n°<?=$resa->getIdReservation() ?></span>
                                <h4>le <?= $date ?> à <?= $time ?></h4>
                                <h5>pour <?= $resa->getClientsNb() ?> personnes</h5>
                                <h5>client n°  <?= $resa->getIdClient() ?></h5>
                                <p><?= $resa->getMessage() ?></p>

                            </div>
                        </div>
                    <?php } ?>
                        </div>
                </div>
            </section><!-- End Messages Section -->

        </main>
    </div>
</div>

<footer id="footer">
    <?php include "app/templates/footerBottom.php";?>
</footer>
<?php include "app/templates/scripts.php"; ?>
</body>
</html>