<?php

function getLastMessage($connexion) {
    $requete = "SELECT * FROM `Messages` ORDER BY `date` DESC LIMIT 1;";
    $rep = $connexion->query($requete);
    return $rep->fetchAll(PDO::FETCH_ASSOC);
}

function getLastDish($connexion) {
    $requete = "SELECT * FROM `Plats` ORDER BY `id_plat` DESC LIMIT 1;";
    $rep = $connexion->query($requete);
    return $rep->fetchAll(PDO::FETCH_ASSOC);
}
