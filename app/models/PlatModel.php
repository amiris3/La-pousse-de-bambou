<?php

namespace app\models;

use app\entities\Plat;

class PlatModel extends Model {

    /**
     * PlatModel constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->table = '`Plats`';
    }

    /**
     * @return array de tous les plats
     */
    public function findAll() {
        $donnees =  parent::executerRequete();
        $data = array();
        foreach ($donnees as $key=>$values) {
            $plat = new Plat($values);
            $data[] = $plat;
        }
        return $data;
    }

    /**
     * @param $id_type
     * @return Plat d'un certain type (spécialités de l'accueil)
     */
    public function findSpecialty($id_type) {
        $params = array(':id' => $id_type);
        $data = array(
            'order' => 'RAND() LIMIT 1',
            'conditions' => 'id_type = :id',
            'params' => $params
        );
        $donnees =  parent::executerRequete($data);
        $plat = new Plat($donnees[0]);
        return $plat;
    }

    /**
     * @return Plat qui a été ajouté en dernier
     */
    public function findLast() {
        $data = array(
            'order' => 'id_plat DESC LIMIT 1',
        );
        $donnees =  parent::executerRequete($data);
        $plat = new Plat($donnees[0]);
        return $plat;
    }

    /**
     * @param Plat $plat
     * @return bool true if inserted the plat in the database
     */
    public function insertPlat(Plat $plat) {
        $params = array(':nom_plat'=> $plat->getNomPlat(), ':description' => $plat->getDescription(),
            ':id_type'=> $plat->getIdType(), ':prix_euros' => $plat->getPrixEuros(), ':img_plat' => $plat->getImgPlat());
        return parent::executerRequete($params, 'insert');
    }

    /**
     * @param $id
     * @return Plat corresponding to the given id
     */
    public function findPlatFromId($id)
    {
        $params = array(':id' => $id);
        $data = array(
            'conditions' => 'id_plat = :id',
            'params' => $params
        );
        $donnees =  parent::executerRequete($data);
        $plat = new Plat($donnees[0]);
        return $plat;
    }

    /**
     * @param $nom
     * @return Plat|array the plat corresponding to the name if exists, or an empty array if it doesn't
     */
    public function findPlatFromNom($nom)
    {
        $params = array(':nom' => $nom);
        $data = array(
            'conditions' => 'nom_plat = :nom',
            'params' => $params
        );
        $donnees =  parent::executerRequete($data);
        if (empty($donnees)) return $donnees;
        else {
            $plat = new Plat($donnees);
            return $plat;
        }
    }

    /**
     * @param Plat $plat
     * @return bool true if the plat has been correctly updated in the database
     */
    public function updatePlat(Plat $plat)
    {
        $params = array(':nom_plat'=> $plat->getNomPlat(), ':description' => $plat->getDescription(),
            ':id_type'=> $plat->getIdType(), ':prix_euros' => $plat->getPrixEuros());
        $data = array(
            'params' => $params,
            'conditions' => "`id_plat`=".$plat->getIdPlat().""
        );
        return parent::executerRequete($data, 'update');
    }

    /**
     * @param Plat $plat
     * @return bool true if the plat has been correctly deleted in the database
     */
    public function deletePlat(Plat $plat)
    {
        $params = array(':id_plat' => $plat->getIdPlat());
        return parent::executerRequete($params, 'delete');
    }
}