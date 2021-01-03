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
                    <h2><?= htmlspecialchars($language['book']);?></h2>
                </div>
                <ol>
                    <li><a href="index.php"><?= htmlspecialchars($language['home']);?></a></li>
                    <li><?= htmlspecialchars($language['book']);?></li>
                </ol>
            </div>

        </div>
    </section>

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p><?= htmlspecialchars($language['bookHere']);?></p>
            </div>

            <form action="#" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="name"><?= htmlspecialchars($language['name']);?> </label><input type="text" name="name" class="form-control" id="name" placeholder="<?= htmlspecialchars($language['name']);?>" data-rule="minlen:3" >
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="email"><?= htmlspecialchars($language['mail']);?> </label><input type="email" class="form-control" name="email" id="email" placeholder="<?= htmlspecialchars($language['mail']);?>" data-rule="email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="phone"><?= htmlspecialchars($language['phone']);?> </label><input type="tel" class="form-control" name="phone" id="phone" placeholder="<?= htmlspecialchars($language['phone']);?>" pattern="[0-9]{10}">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="date"><?= htmlspecialchars($language['date']);?> </label><input type="date" name="date" class="form-control" id="date"  data-rule="minlen:4">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="time"><?= htmlspecialchars($language['time']);?> </label><input type="time" class="form-control" name="time" id="time" data-rule="minlen:4">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <label for="people"><?= htmlspecialchars($language['peopleNb']);?> </label><input type="number" class="form-control" name="people" id="people" placeholder="1" data-rule="min:1">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message"><?= htmlspecialchars($language['message']);?> </label>
                    <textarea class="form-control" name="message" id="message" rows="5" placeholder="<?= htmlspecialchars($language['message']);?>"></textarea>
                </div>
                <div class="text-center"><button type="submit" name="reserver"><?= htmlspecialchars($language['book']);?></button></div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= htmlspecialchars($language['testimonials']);?></h2>
                <p><?= htmlspecialchars($language['customersThink']);?></p>
            </div>

            <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

                <?php foreach ($testimonials as $key => $avis) : ?>
                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <?=$avis->getAvis();?>
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="app/assets/img/testimonials/testimonials-<?=$key?>.jpg" class="testimonial-img" alt="">
                    <h3><?=$avis->getNom();?></h3>
                    <h4><?=$avis->getJob();?></h4>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main>
<?php require 'app/templates/footer.php';  ?>
</body>
</html>
