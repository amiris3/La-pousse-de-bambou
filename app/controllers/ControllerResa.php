<?php

namespace app\controllers;

use app\models\ResaModel;

class ControllerResa {
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

        $reservations = $this->model->findAll();
        include 'app/views/view_adminResa.php';
    }
}