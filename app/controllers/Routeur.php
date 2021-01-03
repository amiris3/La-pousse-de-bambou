<?php

namespace app\controllers;

use app\entities\Client;
use app\entities\Reservation;
use Exception;

class Routeur {

    private $ctrl;
    private $routes;

    public function __construct() {
        $this->routes = array(
            'about' => array('controller' => 'none', 'vue' => 'view_about'),
            'gallery' => array('controller' => 'none', 'vue' => 'view_gallery'),
            'menu' => array('controller' => 'plat'),
            'contact' => array('controller' => 'message'),
            'bookTable' => array('controller' => array('resa', 'client')),
            'adminLogin' => array('controller' => 'admin'),
            'adminLogout' => array('controller' => 'admin'),
            'adminMain' => array('controller' => array('message', 'client', 'resa', 'plat')),
            'adminMessages' => array('controller' => 'message'),
            'adminPlatsInsertUpdate' => array('controller' => 'plat'),
            'adminPlatsDelete' => array('controller' => 'plat'),
            'adminResa' => array('controller' => 'resa'),
            'adminClients' => array('controller' => 'client')
        );
    }

    // Traite une requête entrante
    public function routerRequete() {
        try {
            if (isset($_GET['page'])) {
                $nom_page = $_GET['page'];
                $action = 'show'. ucfirst($nom_page);
                switch ($this->routes[$nom_page]['controller']) {
                    case 'plat':
                        $ctrlP = new ControllerPlat();
                        $ctrlT = new ControllerType();
                        $types = $ctrlT->getModel()->findAll();
                        $ctrlP->$action($types);
                        break;
                    case 'resa':
                        $this->ctrl = new ControllerResa();
                        $this->ctrl->$action();
                        break;
                    case array('resa', 'client'):
                        $this->reserver();
                        break;
                    case array('message', 'client', 'resa', 'plat'):
                        $ctrlM = new ControllerMessage();
                        $ctrlC = new ControllerClient();
                        $ctrlP = new ControllerPlat();
                        $ctrlR = new ControllerResa();
                        $this->ctrl = array($ctrlM, $ctrlR, $ctrlP, $ctrlC);
                        $data = array();
                        foreach ($this->ctrl as $cl) {
                            $data[] = $cl->getModel()->findLast();
                        }
                        include 'app/views/view_adminMain.php';
                        break;
                    case 'admin':
                        $this->ctrl = new ControllerAdmin();
                        $this->ctrl->$action();
                        break;
                    case 'message':
                        $this->ctrl = new ControllerMessage();
                        $this->ctrl->$action();
                        break;
                    case 'client':
                        $this->ctrl = new ControllerClient();
                        $this->ctrl->$action();
                        break;
                    case 'none':
                        include('app/views/' . $this->routes[$nom_page]['vue'] . '.php');
                        break;
                    default:
                        $this->ctrl = new ControllerPlat();
                        $this->ctrl->showAccueil();
                        break;
                }

            }
            else {
                $this->ctrl = new ControllerPlat();
                $this->ctrl->showAccueil();
            }
        }
        catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function reserver() {
        $ctrlR = new ControllerResa();
        $ctrlC = new ControllerClient();
        $message = "";

        if (isset($_POST['reserver'])) { // formulaire soumis

            //enregistrer le client d'abord et récupérer l'id
            $client = new Client([
                'email' => $_POST['email'],
                'nom_client' => $_POST['name'],
                'tel' => $_POST['phone']
            ]);

            $reponse = $ctrlC->getModel()->findIdByMail($client->getEmail());

            if (!empty($reponse)) {
                $id_client = $reponse['id_client'];
            } else {
                $ctrlC->getModel()->insertClient($client);

                //and get id du client
                $id_client = $ctrlC->getModel()->findIdByMail($client->getEmail())['id_client'];
            }

            //récupérer la date
            $year = (int)substr($_POST['date'], 0, 4);
            $month = (int)substr($_POST['date'], 5, 2);
            $day = (int)substr($_POST['date'], 8, 2);

            $timestamp = date('Y-m-d H:i:s', mktime((int)$_POST['time'][0] . $_POST['time'][1],
                (int)($_POST['time'][3] . $_POST['time'][4]), (int) $_POST['time'][5], $month, $day, $year));
            $reservation = new Reservation([
                'id_client' => $id_client,
                'date' => $timestamp,
                'clients_nb' => $_POST['people'],
                'message' => $_POST['message']
            ]);

            //enregistrer la réservation ensuite
            $ctrlR->getModel()->insertResa($reservation);

        }
        include 'app/views/view_bookTable.php';

    }
}