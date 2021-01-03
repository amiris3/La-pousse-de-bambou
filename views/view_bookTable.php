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
                    <h2>Réserver</h2>
                </div>
                <ol>
                    <li><a href="index.php">Accueil</a></li>
                    <li>Réserver</li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p>Réserver une table</p>
            </div>

            <form action="#" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="name">Nom :</label><input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="email">Email :</label><input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="phone">Téléphone : </label><input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="date">Date : </label><input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="time">Heure : </label><input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="people">Nombre de personnes : </label><input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message : </label>
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="text-center"><button type="submit">Book a Table</button></div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Avis</h2>
                <p>Ce que nos clients pensent de nous</p>
            </div>

            <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Délicieux ! Un restaurant aux allures majestueuses, et c'est pour la bonne cause, c'est
                        excellent. C'est un véritable voyage en pays d'Asie durant lequel on peut savourer des plats
                        qui sont typiques. Je recommande !
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="../assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Chef d'entreprise &amp; Fondateur</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Excellent!!! Les produits sont frais et bien travaillés.
                        Le choix de menu y est large et le service, très efficace. Le personnel est très professionnel.
                        Très bon rapport qualité prix. Tout est frais et renouvelé
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="../assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Le restaurant est très très propre ainsi que les toilettes c'est irréprochable .
                        Les desserts comporte des fruits frais découpés ou non ce qui est assez rare.
                        C'est l'un des meilleur restaurant de la région
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="../assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Propriétaire d'un magasin</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Nous sommes allés dans ce restaurant asiatique et jamais déçus. L'accueil est parfait ,
                        le menu est très varié. Le personnel est sympathique et dévoué, mérite le déplacement et est
                        sans doute une valeur sure dans cette catégorie
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="../assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelance</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Un excellent restaurant Asiatique .
                        Super accueil, super service et cuisine d'une grande qualité.
                        Le service est impeccable, vos assiettes vides retirées afin de ne pas encombrer la table.
                        Les tarifs sont raisonnables.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main>
<?php require 'templates/footer.php';  ?>
</body>
</html>
