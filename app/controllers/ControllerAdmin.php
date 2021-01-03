<?php

namespace app\controllers;

use app\models\AdminModel;

class ControllerAdmin {
    private $model;

    /**
     * ControllerPlat constructor.
     */
    public function __construct() {
        $this->model = new AdminModel();
    }

    public function showAdminLogin() {
        $message = "";
        if (isset($_POST['login'])) { // formulaire soumis
            $check = $this->model->findId($_POST['identifiant'],hash('sha256', $_POST['mdp']) );
            if (empty($check)) {
                $message = "L'identifiant ou le mot de passe saisi est incorrect";
            } else {
                $_SESSION['admin'] = $check;
                header('Location:index.php?page=adminMain');
                die();
            }
        }
        include "app/views/view_adminLogin.php";
    }

    public function showAdminLogout() {
        if (isset($_POST['logout'])) {
            unset($_SESSION['admin']);
            header('Location:index.php');
            die();
        }
        include 'app/views/view_adminLogout.php';
    }
}