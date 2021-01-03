<?php
require 'config/connexion.php';
require 'models/model_adminLog.php';
$connexion = connexionBd();

//LES IDENTIFIANTS FONCTIONNELS DE L'ADMIN SONT :
//login: admin
//mdp: admin


$message = "";

if (isset($_POST['login'])) { // formulaire soumis

    $admin = [
        'identifiant' => $_POST['identifiant'],
        'mdp' => hash('sha256', $_POST['mdp']),
    ];

    $check = checkAdmin($admin, $connexion);

    if (empty($check)) {
        $message = "L'identifiant ou le mot de passe saisi est incorrect";
    } else {
        $_SESSION['admin'] = $check[0];
        print_r($_SESSION['admin']);
        header('Location:index.php?page=adminMain');
        die();
    }
}