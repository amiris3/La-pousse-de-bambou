<?php

function getAllPlats($connexion) {
    $requete = "SELECT * FROM Plats";
    $rep = $connexion->query($requete);
    return $rep->fetchAll(PDO::FETCH_ASSOC);
}