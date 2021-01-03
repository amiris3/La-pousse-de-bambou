<!DOCTYPE html>
<html lang="fr">
<?php require 'app/templates/head.php'; ?>

<body>
<?php require 'app/templates/header.php'; ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1><span>La pousse de bambou</span>, restaurant asiatique à La Rochelle</h1>
                <h2>Dans une ambiance feutrée et de grand standing, venez découvrir ou redécouvrir les saveurs des
                    cuisines traditionnelles chinoise, japonaise et thailandaise.</h2>

                <div class="btns">
                    <a href="index.php?page=menu" class="btn-menu animated fadeInUp">Notre Menu</a>
                    <a href="index.php?page=bookTable" class="btn-book animated fadeInUp">Réserver</a>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Hero -->


<main id="main">

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Spécialités</h2>
                <p>Découvrez nos spécialités</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab"
                               href="#tab-0"><?= $specialites[0]->getNomPlat() ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-1"><?= $specialites[1]->getNomPlat() ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2"><?= $specialites[2]->getNomPlat() ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <?php foreach ($specialites as $key => $values) {
                            $activeShow = "";
                            if ($key == 0) $activeShow = "active show" ?>
                            <div class="tab-pane <?= $activeShow ?>" id="tab-<?= $key ?>">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3><?= $values->getNomPlat() ?></h3>
                                        <p class="font-italic"><?= $values->getDescription()?></p>
                                        <p>Il est pour nous de la plus haute importance de vous donner des produits frais,
                                        de la qualité plus que de la quantité. Nous prenons bien soin de l'hygiène de
                                        ceux en contact avec la nourriture et d'autant plus en cette période.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="../<?= $values->getImgPlat() ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>évènements</h2>
                <p>Organisez vos évènements dans notre restaurant </p>
            </div>

            <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">

                <?php foreach ($evenements as $key => $values) { ?>
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="<?= $values['img'] ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3><?= $values['nom'] ?></h3>
                            <div class="price">
                                <p><span><?= $values['prix'] ?>€</span></p>
                            </div>
                            <p class="font-italic"><?= $values['italic'] ?></p>
                            <ul>
                                <li><i class="icofont-check-circled"></i> <?= $values['1'] ?></li>
                                <li><i class="icofont-check-circled"></i> <?= $values['2'] ?></li>
                                <li><i class="icofont-check-circled"></i> <?= $values['3'] ?></li>
                            </ul>
                            <p><?= $values['p'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- End Events Section -->

</main>
<?php require 'app/templates/footer.php'; ?>
</body>
</html>