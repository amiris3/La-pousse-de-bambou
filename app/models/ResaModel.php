<?php

namespace app\models;

use app\entities\Reservation;

class ResaModel extends Model
{

    /**
     * ResaModel constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->table = '`Reservations`';
    }

    /**
     * @return array de toutes les réservations
     */
    public function findAll()
    {
        $donnees = parent::executerRequete();
        $data = array();
        foreach ($donnees as $key => $values) {
            $resa = new Reservation($values);
            $data[] = $resa;
        }
        return $data;
    }

    /**
     * @return Reservation qui a été ajoutée en dernier
     */
    public function findLast()
    {
        $data = array(
            'order' => 'id_reservation DESC LIMIT 1',
        );
        $donnees = parent::executerRequete($data);
        $resa = new Reservation($donnees[0]);
        return $resa;
    }


    /**
     * @param Reservation $resa
     * @return bool true if inserted reservation in the database
     */
    public function insertResa(Reservation $resa)
    {
        $params = array(':id_client' => $resa->getIdClient(), ':clients_nb' => $resa->getClientsNb(),
            ':date' => $resa->getDate(), ':message' => $resa->getMessage());
        return parent::executerRequete($params, 'insert');
    }
}