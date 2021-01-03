<?php

function getRandomPlatFromTypeId($connexion, $id_type) {
    $requete = "SELECT * FROM Plats WHERE `id_type`=".$id_type." ORDER BY RAND() LIMIT 1;";
    $rep = $connexion->query($requete);
    return $rep->fetchAll(PDO::FETCH_ASSOC);
}