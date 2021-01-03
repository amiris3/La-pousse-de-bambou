<?php

namespace app\controllers;

use app\models\ResaModel;
use app\traits\AdminLoggedIn;

class ControllerResa {
    use AdminLoggedIn;
    private $model;

    /**
     * ControllerResa constructor.
     */
    public function __construct() {
        $this->model = new ResaModel();
    }

    /**
     * @return ResaModel
     */
    public function getModel()
    {
        return $this->model;
    }

    public function showAdminResa() {
        $this->redirectLogIn();

        $tab = ['adminMain', 'adminResa', 'adminClients', 'adminMessages', 'adminPlatsInsertUpdate', 'adminPlatsDelete'];
        $noms = ['Dashboard', 'Réservations', 'Clients', 'Messages'];
        $icons = ['home', 'restaurant', 'user', 'ui-message'];

        $reservations = $this->model->findAll();
        include 'app/views/view_adminResa.php';
    }
}