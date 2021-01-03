<?php

namespace app\controllers;

use app\entities\Client;
use app\entities\Reservation;
use app\entities\Testimony;
use app\languages\LanguageUsed;
use app\traits\AdminLoggedIn;
use Exception;

class Routeur {
    use AdminLoggedIn;
    private $routes;
    protected $lang;

    /**
     * Routeur constructor.
     */
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

        $langUsed = new LanguageUsed();
        if (isset($_GET['lang'])) {
            if (!($langUsed->set_lang_id($_GET['lang']))) {
                $langUsed->set_lang_id($langUsed->get_lang_id());
            }
        } else {
            $langUsed->set_lang_id($langUsed->get_lang_id());
        }
        $this->lang = $langUsed->init_language()->lang;
    }


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
                        $ctrlP->$action($types, $this->lang);
                        break;
                    case 'resa':
                        $ctrl = new ControllerResa();
                        $ctrl->$action($this->lang);
                        break;
                    case array('resa', 'client'):
                        $this->reserver();
                        break;
                    case array('message', 'client', 'resa', 'plat'):
                        $this->mainAdmin();
                        break;
                    case 'admin':
                        $ctrl = new ControllerAdmin();
                        $ctrl->$action();
                        break;
                    case 'message':
                        $ctrl = new ControllerMessage();
                        $ctrl->$action($this->lang);
                        break;
                    case 'client':
                        $ctrl = new ControllerClient();
                        $ctrl->$action();
                        break;
                    case 'none':
                        $language = $this->lang;
                        $langUsed = new LanguageUsed();
                        $allLanguages = $langUsed->languages;
                        $url = $langUsed->get_new_url();
                        include('app/views/' . $this->routes[$nom_page]['vue'] . '.php');
                        break;
                    default:
                        $ctrl = new ControllerPlat();
                        $ctrl->showAccueil($this->lang);
                        break;
                }

            }
            else {
                $ctrl = new ControllerPlat();
                $ctrl->showAccueil($this->lang);
            }
        }
        catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    private function reserver() {
        $ctrlR = new ControllerResa();
        $ctrlC = new ControllerClient();
        $message = "";
        $language = $this->lang;
        $langUsed = new LanguageUsed();
        $allLanguages = $langUsed->languages;
        $url = $langUsed->get_new_url();
        $testimonials = array();
        $noms = array('Saul Goodman', 'Sara Wilsson', 'Jena Karlis', 'Matt Brandon', 'John Larson');
        for ($i=1;$i<6;$i++) {
            $avisnb = 'avis' . $i . '_';
            $testimonials[$i] = new Testimony($noms[$i-1], htmlspecialchars($language[$avisnb.'job']),
                htmlspecialchars($language[$avisnb.'avis']));
        }

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

    private function mainAdmin() {
        $this->redirectLogIn();
        $ctrlM = new ControllerMessage();
        $ctrlC = new ControllerClient();
        $ctrlP = new ControllerPlat();
        $ctrlR = new ControllerResa();
        $ctrl = array($ctrlM, $ctrlR, $ctrlP, $ctrlC);
        $data = array();
        foreach ($ctrl as $cl) {
            $data[] = $cl->getModel()->findLast();
        }
        $tab = ['adminMain', 'adminResa', 'adminClients', 'adminMessages', 'adminPlatsInsertUpdate', 'adminPlatsDelete'];
        $noms = ['Dashboard', 'Réservations', 'Clients', 'Messages'];
        $icons = ['home', 'restaurant', 'user', 'ui-message'];
        $langUsed = new LanguageUsed();
        $allLanguages = $langUsed->languages;
        $url = $langUsed->get_new_url();
        include 'app/views/view_adminMain.php';
    }
}