<!DOCTYPE html>
<html lang="fr">
<?php require 'templates/head.php';  ?>

<body>
<?php require 'templates/header.php';  ?>

<main id="main">

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
                <ol>
                    <li><a href="index.php">Accueil</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Contactez nous</p>
            </div>
        </div>

        <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px; padding: 0 60px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2763.611329787032!2d-1.157359984104349!3d46.158485179115225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480153a44bee45a7%3A0x54eb44e0f44f028a!2s37%20Rue%20de%20l&#39;Escale%2C%2017000%20La%20Rochelle!5e0!3m2!1sfr!2sfr!4v1605361342617!5m2!1sfr!2sfr" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Adresse :</h4>
                            <p>37 rue de l'Escale, 17000 LA ROCHELLE</p>
                        </div>

                        <div class="open-hours">
                            <i class="icofont-clock-time icofont-rotate-90"></i>
                            <h4>Horaires d'ouverture :</h4>
                            <p>
                                Mardi-Dimanche: <br>
                                11 h 45 - 14 h 30 <br>
                                19 h 30 - 22 h 00 <br>
                                Fermé le lundi
                            </p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email :</h4>
                            <p>info@lapoussedebambou.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Téléphone :</h4>
                            <p>+33 1 23 45 67 89</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="#" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="name">Nom: </label><input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Entrez au moins 4 caractères" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email : </label><input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Entrez un email valide" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Object :</label><input type="text" class="form-control" name="subject" id="subject" placeholder="Object" data-rule="minlen:4" data-msg="Entrez le sujet de votre message, min 4 caractères" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message :</label>
                            <textarea class="form-control" name="message" id="message" rows="8" data-rule="required" data-msg="Ecrivez-nous quelque chose" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="text-center"><button type="submit" id="submit" name="submit">Envoyer le message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->


</main>
<?php require 'templates/footer.php';  ?>
</body>
</html>
