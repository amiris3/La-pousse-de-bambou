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
                    <h2>Menu</h2>
                </div>
                <ol>
                    <li><a href="index.php">Accueil</a></li>
                    <li>Menu</li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Découvrez notre délicieux menu</p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Tout</li>
                        <li data-filter=".filter-starters">Entrées</li>
                        <li data-filter=".filter-dishes">Plats</li>
                        <li data-filter=".filter-desserts">Desserts</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                <?php foreach ($plats as $key => $values) {
                    $filters = ['filter-starters', 'filter-dishes', 'filter-desserts'];
                    $filter = $filters[$values->getIdType()-1]; ?>
                    <div class="col-lg-6 menu-item <?=$filter?>">
                        <img src="<?=$values->getImgPlat()?>" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#"><?=$values->getNomPlat()?></a><span><?=$values->getPrixEuros()?>€</span>
                        </div>
                        <div class="menu-ingredients">
                            <?=$values->getDescription()?>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </section><!-- End Menu Section -->

</main>
<?php require 'app/templates/footer.php';  ?>
</body>
</html>
