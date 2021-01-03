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
                <h1 class="h2">Plats</h1>
            </div>

            <!-- ======= Plats Section ======= -->
            <section id="menu" class="menu section-bg">
                <div class="container-fluid" data-aos="fade-up">


                    <fieldset>
                        <legend>Modifier les plats</legend>
                        <br/>
                        <table class="table table-dark table-bordered">
                            <thead class="thead">
                            <th scope="col">actions</th>
                            <th scope="col"> n°</th>
                            <th scope="col">type</th>
                            <th scope="col">nom du plat</th>
                            <th scope="col">description</th>
                            <th scope="col">prix </th>
                            </thead>
                            <tbody>
                            <?php foreach($plats as $key => $value) { ?>
                                <tr>
                                    <td>
                                        <form id="<?=$key?>" method="post" action="#">
                                            <input type="submit" class="btn btn-warning" name="edit[<?=$key?>]" value="Modifier">
                                            <input type="submit" class="btn btn-danger" name="submit[<?=$key?>]" value="Supprimer">
                                        </form>
                                    </td>
                                    <td><?= $value->getIdPlat() ?></td>
                                    <td><?= $types[$value->getIdType()-1]->getNomType() ?></td>
                                    <td><?= $value->getNomPlat() ?></td>
                                    <td><?= $value->getDescription() ?></td>
                                    <td><?= $value->getPrixEuros() ?> €</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <br/>
                    </fieldset>

                </div>
            </section><!-- End Plats Section -->


        </main>
    </div>
</div>

<footer id="footer">
    <?php include "app/templates/footerBottom.php";?>
</footer>
<?php include "app/templates/scripts.php"; ?>
</body>
</html>