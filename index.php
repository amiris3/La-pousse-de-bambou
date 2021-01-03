<?php session_start();

//Lou Chérensac n°212050

// index.php fait office de controleur frontal

//require('inc/constantes.php'); // inclut le fichier avec constantes
//require('inc/includes.php'); // inclut le fichier avec fonctions (notamment celles du modele)
require('config/routes.php'); // fichiers de routes

if(isset($_GET['page'])) {
    $nomPage = $_GET['page'];

    if(isset($routes[$nomPage])) {
        $controleur = $routes[$nomPage]['controleur'];
        $vue= $routes[$nomPage]['vue'];
        include('controllers/' . $controleur . '.php');
        include('views/' . $vue . '.php');
    }
    else {
        include('controllers/controller_accueil.php');
        include('views/view_accueil.php');
    }
}
else {
    include('controllers/controller_accueil.php');
    include('views/view_accueil.php');
}
