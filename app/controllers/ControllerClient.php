<?php

namespace app\controllers;

use app\models\ClientModel;
use app\traits\AdminLoggedIn;

class ControllerClient {
    use AdminLoggedIn;
    private $model;

    /**
     * ControllerClient constructor.
     */
    public function __construct() {
        $this->model = new ClientModel();
    }

    /**
     * @return ClientModel model
     */
    public function getModel()
    {
        return $this->model;
    }

    public function showAdminClients() {
        $this->redirectLogIn();
        $tab = ['adminMain', 'adminResa', 'adminClients', 'adminMessages', 'adminPlatsInsertUpdate', 'adminPlatsDelete'];
        $noms = ['Dashboard', 'Réservations', 'Clients', 'Messages'];
        $icons = ['home', 'restaurant', 'user', 'ui-message'];
        $clients = $this->model->findAll();
        include 'app/views/view_adminClients.php';
    }
}