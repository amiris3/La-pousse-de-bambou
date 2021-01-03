<?php

namespace app\controllers;

use app\entities\Plat;
use app\models\PlatModel;

class ControllerPlat {
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

    public function showAccueil() {
        $specialites = array();
        for ($i = 1; $i<4;$i++) {
            $specialites[] = $this->model->findSpecialty($i);
        }

        /* EVENEMENTS */

        $evenements = array(
            0 => array(
                'nom' => 'Fêtes d\'anniversaire',
                'img' => 'app/assets/img/event-birthday.jpg',
                'prix' => 69,
                'italic' => 'Nous faisons de votre anniversaire un moment mémorable',
                '1' => 'choix d\'un gâteau sur mesure',
                '2' => 'animations pour les enfants',
                '3' => 'prise en compte des régimes particuliers',
                'p' => 'Notre équipe sera aux petits soins pour s\'assurer que vous ne manquiez de rien'
            ),
            1 => array(
                'nom' => 'Soirées privées',
                'img' => 'app/assets/img/event-private.jpg',
                'prix' => 120,
                'italic' => 'Vous serez accueillis par un intérieur sophistiqué et les sourires chaleureux
         de notre merveilleuse équipe.',
                '1' => 'un endroit agréable et intimiste',
                '2' => 'des serveurs qui veillent au grain',
                '3' => 'de la nourriture qui ravira tout un chacun',
                'p' => 'Notre restaurant est disponible exclusivement pour vous, en faisant le lieu idéal pour les évènements
        de ce genre'
            ),
            2 => array(
                'nom' => 'Fêtes d\'entreprise',
                'img' => 'app/assets/img/event-custom.jpg',
                'prix' => 143,
                'italic' => 'Notre restaurant vous promet une expérience agréable et unique avec vos collègues et 
        chefs d\'entreprise',
                '1' => 'un encadrement de votre consommation d\'alcool pour que vous puissiez vous amuser sans avoir à y penser',
                '2' => 'des animations originales',
                '3' => 'une ambiance légère',
                'p' => 'La pression diminuera et vos collègues vous remercieront de nous avoir choisi.'
            ),

        );
        include 'app/views/view_accueil.php';
    }

    public function showMenu() {
        $plats = $this->model->findAll();
        include 'app/views/view_menu.php';
    }

    public function showAdminPlatsInsertUpdate($types) {

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