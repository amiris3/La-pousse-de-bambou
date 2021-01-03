<?php

namespace app\models;

use app\entities\Client;

class ClientModel extends Model {

    /**
     * ClientModel constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->table = '`Clients`';

    }

    /**
     * @return array de tous les clients
     */
    public function findAll() {
        $donnees =  parent::executerRequete();
        $data = array();
        foreach ($donnees as $key=>$values) {
            $client = new Client($values);
            $data[] = $client;
        }
        return $data;
    }

    /**
     * @return Client qui a été ajouté en dernier
     */
    public function findLast() {
        $data = array(
            'order' => 'id_client DESC LIMIT 1',
        );
        $donnees =  parent::executerRequete($data);
        return new Client($donnees[0]);
    }

    /**
     * @param $mail
     * @return bool|int id_client correspondant à l'email, si existant
     */
    public function findIdByMail($mail) {
        $params = array(':email' => $mail);
        $data = array(
            'fields' => 'id_client',
            'conditions' => 'email = :email',
            'params' => $params
        );
        $donnees =  parent::executerRequete($data);
        if ($donnees == false) return $donnees;
        else return $donnees[0];
    }

    /**
     * @param Client $client
     * @return bool true if inserted the client in the database
     */
    public function insertClient(Client $client) {
        $params = array(':nom_client'=>$client->getNomClient(), ':email'=>$client->getEmail(), ':tel'=>$client->getTel());
        return parent::executerRequete($params, 'insert');
    }
}