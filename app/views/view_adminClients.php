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
                <h1 class="h2">Clients</h1>
            </div>

            <!-- ======= Messages Section ======= -->
            <section id="dashboard" class="dashboard">
                <div class="container" data-aos="fade-up">
                    <div class="row">

                    <?php foreach ($clients as $key => $client) {
                        $space = count($clients) < 3 ? 'space' : '';?>
                        <div class="col-lg-6 order-<?=$key?> order-lg-<?=$key?> <?=$space?>" data-aos="zoom-in">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span>Client n°<?=$client->getIdClient() ?></span>
                                <h4><?= $client->getNomClient() ?></h4>
                                <h5>email: <?= $client->getEmail() ?></h5>
                                <h5>téléphone: 0<?= $client->getTel() ?></h5>
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