<?php

function getAllMessages($connexion) {
    $requete = "SELECT * FROM `Messages` ORDER BY `date` DESC;";
    $rep = $connexion->query($requete);
    return $rep->fetchAll(PDO::FETCH_ASSOC);
}