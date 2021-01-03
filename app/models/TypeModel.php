<?php

namespace app\models;

use app\entities\Type;

class TypeModel extends Model {

    /**
     * TypeModel constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->table = '`Types`';
    }


    /**
     * @return array de tous les types
     */
    public function findAll() {
        $donnees =  parent::executerRequete();
        $data = array();
        foreach ($donnees as $key=>$values) {
            $type = new Type($values);
            $data[] = $type;
        }
        return $data;
    }

}