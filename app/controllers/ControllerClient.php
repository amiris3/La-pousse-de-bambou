<?php

namespace app\controllers;

use app\models\ClientModel;

class ControllerClient {
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
        /*if (!isset($_SESSION['admin'])) {
            header('Location:index.php?page=adminLogin');
            die();
        }*/
        $clients = $this->model->findAll();
        include 'app/views/view_adminClients.php';
    }
}