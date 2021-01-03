<!doctype html>
<html lang="en">
<?php require 'app/templates/head.php'; ?>
<body>
<?php require "app/templates/navbarAdmin.php"; ?>

<div class="container-fluid">
    <div class="row">
        <?php require "app/templates/sidebarAdmin.php"; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Plats</h1>
            </div>

            <!-- ======= Plats Section ======= -->
            <section id="menu" class="menu dashboard insert">
                <div class="container-fluid text-center" data-aos="fade-up">

                    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-12 menu-item ">
                            <form method="post" enctype="multipart/form-data" action="#">
                                <fieldset>
                                    <?php if (isset($_GET['update'])) {
                                        $title = 'Modification';
                                    } else {
                                        $title = 'Ajout';
                                    } ?>
                                    <legend><?= $title ?>  d'un plat</legend>
                                    <br/>
                                    <p><label for="nom">Nom : </label>
                                        <input type="text" id="nom" name="nom" value="<?= $plat->getNomPlat() ?>"
                                               required/></p>
                                    <p><label for="description">Description : </label>
                                        <input type="text" id="description" name="description"
                                               value="<?= $plat->getDescription() ?>" required/></p>
                                    <p><label for="type">Type : </label>
                                        <select id="type" name="type">
                                            <?php foreach ($types as $key => $value) { ?>
                                                <option name="type[]" selected="<?= ($plat->getIdType()==$key) ? 'selected':'' ;?>"><?= $value->getNomType() ?></option>
                                            <?php } ?>
                                        </select>
                                    </p>
                                    <p><label for="prix">Prix : </label>
                                        <input type="text" id="prix" name="prix" value="<?= $plat->getPrixEuros() ?>"
                                               required/></p>
                                    <?php if ($title == 'Ajout') { ?>
                                        <p><label for="image">Image : </label>
                                            <input type="file" id="image" name="image" accept="image/jpeg" required/>
                                        </p>
                                    <?php } ?>

                                </fieldset>
                                <p class="submit">
                                    <button type="submit" class="btn" id="<?$title?>"
                                            name="<?=$title?>"><?= strtoupper($title) ?></button>
                                </p>
                                <br/>
                                <br/>
                            </form>
                            <p><?= $message ?></p>
                        </div>

                    </div>

                </div>
            </section><!-- End Plats Section -->


        </main>
    </div>
</div>

<footer id="footer">
    <?php include "app/templates/footerBottom.php"; ?>
</footer>
<?php include "app/templates/scripts.php"; ?>
</body>
</html>