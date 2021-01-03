<?php $social = ['twitter', 'facebook', 'instagram', 'pinterest']; ?>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-8">
                        <div class="footer-info">
                            <h3>La pousse de bambou</h3>
                            <p>
                                37 rue de l'Escale <br>
                                17000 La Rochelle, FRANCE<br>
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-8">
                        <div class="footer-info">

                            <h4>Contact</h4>
                            <p>
                                <strong>Téléphone :</strong> +33 1 23 45 67 89<br>
                                <strong>Email :</strong> info@lapoussedebambou.com<br>
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-8 footer-links">
                        <h4>Réseaux sociaux</h4>
                        <div class="social-links mt-4">
                            <?php foreach ($social as $value) { ?>
                                <a href="#" class="<?=$value?>"><i class="bx bxl-<?=$value?>"></i></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-8 footer-links">
                        <div class="text-center mt-5">
                            <h5><a href="index.php?page=adminLogin">Admin</a></h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <?php include 'footerBottom.php'; ?>

    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

<?php include "scripts.php";