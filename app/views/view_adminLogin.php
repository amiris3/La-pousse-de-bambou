<!doctype html>
<html lang="en">
<?php include 'app/templates/head.php'; ?>
<body id="login-body" class="text-center">

    <form class="form-signin" method="post">
        <div class="form-top">
            <h1 class="font-weight-normal">La pousse de bambou</h1>
            <h1 class="font-weight-normal">Administration</h1>
            <p><?=$message?></p>
        </div>
        <div class="form-bottom">
            <h1 class="h3 mb-3 font-weight-normal">Identifiez-vous</h1>
            <label for="identifiant" class="sr-only">Identifiant</label>
            <input type="text" id="identifiant" name="identifiant" class="form-control" placeholder="Identifiant" required autofocus>
            <label for="mdp" class="sr-only">Mot de passe</label>
            <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe" required>
            <input class="btn btn-outline-warning btn-lg btn-block" type="submit" id="login" name="login" value="Valider">
        </div>
    </form>

<footer id="footer" class="fixed-bottom">
    <?php include "app/templates/footerBottom.php"; ?>
</footer>
</body>
</html>