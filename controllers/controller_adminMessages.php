<?php
require 'config/connexion.php';
require 'models/model_adminMessages.php';
$connexion = connexionBd();

if (!isset($_SESSION['admin'])) {
    header('Location:index.php?page=adminLogin');
    die();
}
$messages = getAllMessages($connexion);

