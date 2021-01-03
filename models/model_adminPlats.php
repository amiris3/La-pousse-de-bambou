<?php

function getAllTypes($connexion) {
    $requete = "SELECT * FROM Types";
    $quete = $connexion->prepare($requete);
    $data = [];
    if ($quete->execute()) {
        $data = $quete->fetchAll(PDO::FETCH_ASSOC);
    }
    return $data;
}

function ajouterPlat($connexion, $plat) {
    $requete = "INSERT INTO Plats(nom_plat, description, id_type, prix_euros, img_plat) VALUES(:nom, :description, 
:idType, :prix, :img);";
    $quete = $connexion->prepare($requete);
    $quete->bindValue(':nom', $plat['nom_plat']);
    $quete->bindValue(':description', $plat['description']);
    $quete->bindValue(':idType', $plat['id_type']);
    $quete->bindValue(':prix', $plat['prix_euros']);
    $quete->bindValue(':img', $plat['img_plat']);
    $req = $quete->execute();
    return $req;
}

function deletePlat($connexion, $plat) {
    $requete = "DELETE FROM `Plats` WHERE `id_plat`=".$plat['id_plat'].";";
    return $connexion->exec($requete);
}

function checkPlatExists($connexion, $nom_plat) {
    $requete = "SELECT `id_plat` FROM `Plats` WHERE `nom_plat` = '".$nom_plat."';";
    $rep = $connexion->query($requete);
    return $rep->fetchAll(PDO::FETCH_ASSOC);
}

function getPlatFromId($connexion, $id) {
    $requete = "SELECT * FROM `Plats` WHERE `id_plat` = '".$id."';";
    $rep = $connexion->query($requete);
    return $rep->fetchAll(PDO::FETCH_ASSOC);
}

function updatePlat($connexion, $plat) {
    $requete = "UPDATE `Plats` SET `nom_plat`=:nom, `description`=:description, 
`id_type`=:idType, `prix_euros`=:prix WHERE `id_plat`=".$plat['id_plat'].";";
    $quete = $connexion->prepare($requete);

    $quete->bindValue(':nom', $plat['nom_plat']);
    $quete->bindValue(':description', $plat['description']);
    $quete->bindValue(':idType', $plat['id_type']);
    $quete->bindValue(':prix', $plat['prix_euros']);
    return $quete->execute();
}