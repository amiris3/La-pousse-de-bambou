<?php

namespace app\controllers;

use app\entities\Event;
use app\entities\Plat;
use app\languages\LanguageUsed;
use app\models\PlatModel;
use app\traits\AdminLoggedIn;

class ControllerPlat {
    use AdminLoggedIn;
    private $model;

    /**
     * ControllerPlat constructor.
     */
    public function __construct()
    {
        $this->model = new PlatModel();
    }

    /**
     * @return PlatModel model
     */
    public function getModel()
    {
        return $this->model;
    }

    public function showAccueil($lang) {
        $language = $lang;
        $specialites = array();
        for ($i = 1; $i<4;$i++) {
            $specialites[] = $this->model->findSpecialty($i);
        }

        $langUsed = new LanguageUsed();
        $allLanguages = $langUsed->languages;
        $url = $langUsed->get_new_url();

        /* EVENEMENTS */
        $evenements = array();
        $imagesEvent = array('app/assets/img/event-birthday.jpg', 'app/assets/img/event-private.jpg',
            'app/assets/img/event-custom.jpg');
        $prices = array(69, 120, 143);
        for ($i=1;$i<4;$i++) {
            $e = 'e'.$i.'_';
            $evenements[$i-1] = new Event(htmlspecialchars($language[$e.'nom']), $imagesEvent[$i-1],
                htmlspecialchars($langUsed->changePriceAccordingly($prices[$i-1])), htmlspecialchars($language[$e.'italic']),
                htmlspecialchars($language[$e.'1']),
                htmlspecialchars($language[$e.'2']), htmlspecialchars($language[$e.'3']),
                htmlspecialchars($language[$e.'p'])
            );
        }
        include 'app/views/view_accueil.php';
    }

    public function showMenu($typesGiven, $lang) {
        $types = $typesGiven;
        $plats = $this->model->findAll();
        $language = $lang;
        $langUsed = new LanguageUsed();
        $allLanguages = $langUsed->languages;
        $url = $langUsed->get_new_url();
        include 'app/views/view_menu.php';
    }

    public function showAdminPlatsInsertUpdate($types) {
        $this->redirectLogIn();
        $tab = ['adminMain', 'adminResa', 'adminClients', 'adminMessages', 'adminPlatsInsertUpdate', 'adminPlatsDelete'];
        $noms = ['Dashboard', 'Réservations', 'Clients', 'Messages'];
        $icons = ['home', 'restaurant', 'user', 'ui-message'];
        $message = '';

        if (isset($_GET['update'])) {
            $plat = $this->model->findPlatFromId($_GET['update']);
        }

        if (!isset($plat)) {
            $plat = new Plat(array(
                    'nom_plat' => '',
                    'description' => '',
                    'prix_euros' => 0,
                ));
        }

        if (isset($_POST['Ajout']) || isset($_POST['Modification'])) {

            if (isset($_POST['Ajout'])) {
                //vérifier que le plat n'existe pas déjà
                $platExists = $this->model->findPlatFromNom($_POST['nom']);
            } else {
                $platExists = [];
                $plat_id = $plat->getIdPlat();
            }
            if (empty($platExists)) {
                //find id_type from type
                $type_id = 0;
                $type = $_POST['type'];
                foreach ($types as $key => $val) {
                    if ($val->getNomType() === $type) {
                        $type_id = $key + 1;
                    }
                }

                //save plat in database
                $plat = new Plat(array(
                    'nom_plat' => addslashes($_POST['nom']),
                    'description' => addslashes($_POST['description']),
                    'id_type' => $type_id,
                    'prix_euros' => $_POST['prix'],
                ));

                if (isset($_POST['Ajout'])) {
                    //import img
                    move_uploaded_file($_FILES["image"]["tmp_name"], "app/assets/img/menu/" . $_FILES["image"]["name"]);
                    $plat->setImg_plat("" . "app/assets/img/menu/" . $_FILES["image"]["name"]);

                    $this->model->insertPlat($plat);
                    $message = "Le plat a été enregistré dans la base de données";

                } else {
                    $plat->setId_plat($plat_id);
                    $this->model->updatePlat($plat);
                    $message = 'Le plat a bien été modifié';
                }

            } else {
                $message = "Le plat existe déjà dans la base de données";
            }
        }
        include 'app/views/view_adminPlatsInsertUpdate.php';
    }

    public function showAdminPlatsDelete($types) {
        $this->redirectLogIn();

        $tab = ['adminMain', 'adminResa', 'adminClients', 'adminMessages', 'adminPlatsInsertUpdate', 'adminPlatsDelete'];
        $noms = ['Dashboard', 'Réservations', 'Clients', 'Messages'];
        $icons = ['home', 'restaurant', 'user', 'ui-message'];

        $plats = $this->model->findAll();

        if (isset($_POST['submit'])) {
            $key = array_keys($_POST['submit']);
            $plat = $plats[$key[0]];

            //remove article from database
            $this->model->deletePlat($plat);

            //remove image from directory
            unlink($plat->getImgPlat());

            //reactualize the list
            $plats = $this->model->findAll();
        }

        if (isset($_POST['edit'])) {
            $key = array_keys($_POST['edit']);
            $plat = $plats[$key[0]];

            //move to update the plat, where the form is
            header('Location:index.php?page=adminPlatsInsertUpdate&update=' . $plat->getIdPlat() . '');
            die();

        }
        include 'app/views/view_adminPlatsDelete.php';
    }
}