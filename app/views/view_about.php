<!DOCTYPE html>
<html lang="fr">
<?php require 'app/templates/head.php';
?>

<body>
<?php require 'app/templates/header.php';  ?>

<main id="main">

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <div class="section-title">
                    <h2><?= htmlspecialchars($language['about']);?></h2>
                </div>                <ol>
                    <li><a href="index.php"><?= htmlspecialchars($language['home']);?></a></li>
                    <li><?= htmlspecialchars($language['about']);?></li>
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
                        <img src="app/assets/img/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3><?= htmlspecialchars($language['promise']);?></h3>
                    <br>
                    <p class="font-italic"><?= htmlspecialchars($language['idealPlace']);?></p>
                    <ul>
                        <?php for ($i=1; $i<4;$i++) : ?>
                        <li><i class="icofont-check-circled"></i><?= htmlspecialchars($language['quality'.$i.'']);?></li>

                        <?php endfor;?>
                    </ul>
                    <p><?= htmlspecialchars($language['aboutSpeech']);?></p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= htmlspecialchars($language['whyUs']);?></h2>
                <p><?= htmlspecialchars($language['whyChoosingUs']);?> </p>
            </div>

            <div class="row">
                <?php for ($i=1; $i<4;$i++) : ?>
                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="<?=$i?>00">
                        <span>0<?=$i?></span>
                        <h4><?= htmlspecialchars($language['why'.$i.'_name']);?></h4>
                        <p><?= htmlspecialchars($language['why'.$i.'_text']);?></p>
                    </div>
                </div>
                <?php endfor;?>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= htmlspecialchars($language['chefs']);?></h2>
                <p><?= htmlspecialchars($language['proChefs']);?></p>
            </div>

            <div class="row">
                <?php for ($i=1; $i<4;$i++) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="app/assets/img/chefs/chefs-<?=$i?>.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><?= htmlspecialchars($language['chef'.$i.'_name']);?></h4>
                                <span><?= htmlspecialchars($language['chef'.$i.'_job']);?></span>
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
                <?php endfor;?>

        </div>
    </section><!-- End Chefs Section -->

</main>
<?php require 'app/templates/footer.php';  ?>
</body>
</html>
