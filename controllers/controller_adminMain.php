<?php
require 'config/connexion.php';
require 'models/model_adminMain.php';
$connexion = connexionBd();

if (!isset($_SESSION['admin'])) {
    header('Location:index.php?page=adminLogin');
    die();
}
$message = getLastMessage($connexion);

$plat = getLastDish($connexion);