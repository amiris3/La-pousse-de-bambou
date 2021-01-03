<!doctype html>
<html lang="en">
<?php require 'templates/head.php'; ?>
<body id="login-body" class="text-center">

    <form class="form-signin" method="post" action="#">
        <div class="form-top">
            <h1 class="font-weight-normal">La pousse de bambou</h1>
            <h1 class="font-weight-normal">Administration</h1>
        </div>
        <div class="form-bottom">
            <h1 class="h3 mb-3 font-weight-normal">Déconnexion</h1>

            <input class="btn btn-outline-warning btn-lg btn-block" type="submit" name="logout" value="Se déconnecter
et retourner sur le site">

        </div>
    </form>

<footer id="footer" class="fixed-bottom">
    <?php include "templates/footerBottom.php"; ?>
</footer>
</body>
</html>