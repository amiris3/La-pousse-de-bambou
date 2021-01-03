<?php
require 'config/connexion.php';
require 'models/model_menu.php';
require 'models/model_adminPlats.php';

$connexion = connexionBd();
$message = '';

if (!isset($_SESSION['admin'])) {
    header('Location:index.php?page=adminLogin');
    die();
}

$plats = getAllPlats($connexion);
$types = getAllTypes($connexion);

if (isset($_POST['submit'])) {
    $key = array_keys($_POST['submit']);
    $plat = $plats[$key[0]];

    //remove article from database
    deletePlat($connexion, $plat);

    //remove image from directory
    unlink($plat['img_plat']);

    $plats = getAllPlats($connexion);

}

if (isset($_POST['edit'])) {
    $key = array_keys($_POST['edit']);
    $plat = $plats[$key[0]];

    //move to update the plat, where the form is
    header('Location:index.php?page=adminPlatsInsertUpdate&update=' . $plat['id_plat'] . '');
    die();

}

if (isset($_GET['update'])) {
    $plat = getPlatFromId($connexion, $_GET['update']);
}

if (!isset($plat)) {
    $plat = array(
        0 => array(
            'nom_plat' => '',
            'description' => '',
            'prix_euros' => 0,
        )
    );
}

if (isset($_POST['Ajout']) || isset($_POST['Modification'])) {

    if (isset($_POST['Ajout'])) {
        //vérifier que le plat n'existe pas déjà
        $platExists = checkPlatExists($connexion, $_POST['nom']);
    } else {
        $platExists = [];
        $plat_id = $plat[0]['id_plat'];
    }
    if (empty($platExists)) {
        //find id_type from type
        $type_id = 1;
        $type = $_POST['type'];
        foreach ($types as $key => $val) {
            if ($val['nom_type'] === $type) {
                $type_id = $key + 1;
            }
        }

        //save plat in database
        $plat = array(
            'nom_plat' => addslashes($_POST['nom']),
            'description' => addslashes($_POST['description']),
            'id_type' => $type_id,
            'prix_euros' => $_POST['prix'],
        );

        if (isset($_POST['Ajout'])) {
            //import img
            move_uploaded_file($_FILES["image"]["tmp_name"], "assets/img/menu/" . $_FILES["image"]["name"]);
            $plat['img_plat'] = "" . "assets/img/menu/" . $_FILES["image"]["name"];

            ajouterPlat($connexion, $plat);
            $message = "Le plat a été enregistré dans la base de données";

        } else {
            $plat['id_plat'] = $plat_id;
            print_r(updatePlat($connexion, $plat));
            $message = 'Le plat a bien été modifié';
        }

    } else {
        $message = "Le plat existe déjà dans la base de données";
    }
}