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
                <h1 class="h2">Messages</h1>
            </div>

            <!-- ======= Messages Section ======= -->
            <section id="dashboard" class="dashboard">
                <div class="container" data-aos="fade-up">
                    <div class="row">

                    <?php foreach ($messages as $key => $message) { ?>
                        <div class="col-lg-6 order-<?=$key?> order-lg-<?=$key?>" data-aos="zoom-in">
                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                                <span><?=$message['id_message'] ?></span>
                                <h4><?= $message['object'] ?></h4>
                                <p><?= $message['message'] ?></p>
                                <h5><?= $message['email'] ?></h5>
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
    <?php include "templates/footerBottom.php";?>
</footer>
<?php include "templates/scripts.php"; ?>
</body>
</html>