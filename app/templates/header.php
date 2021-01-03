

<!-- ======= TOP BAR ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-phone"></i> +33 1 23 45 67 89
            <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i>
                <?= htmlspecialchars($language['openings'])?></span>
        </div>
        <div class="languages">
            <ul>
                <?php foreach ($allLanguages as $lang) :
                    $href = $url . $lang;?>
                <li><a class="<?=$_SESSION['lang'] == $lang ? "active" : ""?>" href="<?=$href?>">
                        <?=ucfirst($lang)?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.php"><?= htmlspecialchars($language['nomSite']);?></a></h1>
        <a href="#" class=" mr-auto"><img src="app/assets/img/bambooLogo.jpeg" alt="" class="img-fluid" width="70px"></a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="index.php"><?= htmlspecialchars($language['home']);?></a></li>
                <li><a href="index.php?page=about"><?= htmlspecialchars($language['about']);?></a></li>
                <li><a href="index.php?page=menu"><?= htmlspecialchars($language['menu']);?></a></li>
                <li><a href="index.php?page=gallery"><?= htmlspecialchars($language['gallery']);?></a></li>
                <li><a href="index.php?page=contact"><?= htmlspecialchars($language['contact']);?></a></li>
                <li class="book-a-table text-center"><a href="index.php?page=bookTable"><?= htmlspecialchars($language['book']);?></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->