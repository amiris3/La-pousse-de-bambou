<?php

function checkAdmin($admin, $connexion) {

    $requete = "SELECT `id_admin` FROM `Admins` WHERE `login` = :login AND `mdp` = :mdp ;";
    $quete = $connexion->prepare($requete);
    $quete->bindValue(':login', $admin['identifiant']);
    $quete->bindValue(':mdp', $admin['mdp']);
    $data = [];
    if ($quete->execute()) {
        $data = $quete->fetchAll();
    }
    return $data;
}