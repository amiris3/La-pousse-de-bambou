<?php

namespace app\models;

use app\entities\Admin;

class AdminModel extends Model {

    /**
     * AdminModel constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->table = '`Admins`';
    }

    /**
     * @param $login
     * @param $mdp
     * @return Admin|false Admin if login and mdp are correct, false if not
     */
    public function findId($login, $mdp) {
        $params = array(':login' => $login, ':mdp' => $mdp);
        $data = array(
            'fields' => 'id_admin',
            'conditions' => 'login = :login AND mdp = :mdp',
            'params' => $params
        );
        $donnees = parent::executerRequete($data);
        if ($donnees == false) return false;
        else {
            return new Admin($donnees[0]);
        }
    }

}