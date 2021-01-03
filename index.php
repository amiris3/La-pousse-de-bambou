<?php

//Lou Chérensac n°212050

//charger classes
function chargerClasse($classe) {
    $classe = str_replace('\\', '/', $classe);
    require $classe . '.php';
}
use app\controllers\Routeur;
spl_autoload_register('chargerClasse');

$routeur = new Routeur();
$routeur->routerRequete();
