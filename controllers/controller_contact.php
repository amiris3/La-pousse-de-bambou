<?php
require 'config/connexion.php';
$connexion = connexionBd();

if (isset($_POST['submit'])) { // formulaire soumis

    $mail = [
        'subject' => $_POST['subject'],
        'message' => $_POST['message'] . '\n sent by ' . $_POST['name'] . ' ' . $_POST['email'],
    ];

    //mail('info@lapoussedebambou.com', $mail['subject'], $mail['message']);


}