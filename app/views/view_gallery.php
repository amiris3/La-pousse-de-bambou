<!DOCTYPE html>
<html lang="fr">
<?php require 'app/templates/head.php';  ?>

<body>
<?php require 'app/templates/header.php';  ?>

<main id="main">

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <div class="section-title">
                    <h2><?= htmlspecialchars($language['gallery']);?></h2>
                </div>                <ol>
                    <li><a href="index.php"><?= htmlspecialchars($language['home']);?></a></li>
                    <li><?= htmlspecialchars($language['gallery']);?></li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <p><?= htmlspecialchars($language['pictures']);?></p>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row no-gutters">

                <?php for ($i = 1; $i<9;$i++) : ?>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="app/assets/img/gallery/gallery-<?=$i?>.jpg" class="venobox" data-gall="gallery-item">
                            <img src="app/assets/img/gallery/gallery-<?=$i?>.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <?php endfor; ?>

            </div>

        </div>
    </section><!-- End Gallery Section -->


</main>
<?php require 'app/templates/footer.php';  ?>
</body>
</html>
