<?php

namespace app\controllers;

use app\models\TypeModel;

class ControllerType {
    private $model;

    /**
     * ControllerPlat constructor.
     */
    public function __construct()
    {
        $this->model = new TypeModel();
    }

    /**
     * @return TypeModel model
     */
    public function getModel()
    {
        return $this->model;
    }
}