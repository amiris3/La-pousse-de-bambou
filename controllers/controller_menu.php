<?php
require 'config/connexion.php';
require 'models/model_menu.php';

$connexion = connexionBd();

$plats = getAllPlats($connexion);