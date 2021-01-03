<!DOCTYPE html>
<html lang="fr">
<?php require 'app/templates/head.php';?>

<body>
<?php require 'app/templates/header.php';?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1><span><?= htmlspecialchars($language['nomSite']);?></span>, <?= htmlspecialchars($language['restoAsiat']);?></h1>
                <h2><?= htmlspecialchars($language['hero']);?></h2>

                <div class="btns">
                    <a href="index.php?page=menu" class="btn-menu animated fadeInUp">
                        <?= htmlspecialchars($language['ourMenu']);?></a>
                    <a href="index.php?page=bookTable" class="btn-book animated fadeInUp">
                        <?= htmlspecialchars($language['book']);?></a>
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
                <h2><?= htmlspecialchars($language['specialties']);?></h2>
                <p> <?= htmlspecialchars($language['discoverSpecialties']);?></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <?php foreach ($specialites as $key => $values) :
                        $activeShow = "";
                        if ($key == 0) $activeShow = "active show" ?>
                        <li class="nav-item">
                            <a class="nav-link <?=$activeShow?>" data-toggle="tab"
                               href="#tab-<?=$key?>"><?= $values->getNomPlat() ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <?php foreach ($specialites as $key => $values) :
                            $activeShow = "";
                            if ($key == 0) $activeShow = "active show" ?>
                            <div class="tab-pane <?= $activeShow ?>" id="tab-<?= $key ?>">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3><?= $values->getNomPlat() ?></h3>
                                        <p class="font-italic"><?= $values->getDescription()?></p>
                                        <p><?= htmlspecialchars($language['specialtiesSpeech']);?></p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="../<?= $values->getImgPlat() ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= htmlspecialchars($language['events']);?></h2>
                <p><?= htmlspecialchars($language['organizeEvents']);?></p>
            </div>

            <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">

                <?php foreach ($evenements as $key => $event) : ?>
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="<?= $event->img ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3><?= $event->nom ?></h3>
                            <div class="price">
                                <p><span><?= $event->prix ?></span></p>
                            </div>
                            <p class="font-italic"><?= $event->italic ?></p>
                            <ul>
                                <?php for ($i=1;$i<4;$i++) :
                                    $e = '_'.$i;?>
                                <li><i class="icofont-check-circled"></i> <?= $event->$e ?></li>
                                <?php endfor;?>
                            </ul>
                            <p><?= $event->p ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Events Section -->

</main>
<?php require 'app/templates/footer.php'; ?>
</body>
</html>