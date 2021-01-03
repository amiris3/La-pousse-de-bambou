<?php

namespace app\models;

use app\entities\Message;

class MessageModel extends Model {

    /**
     * MessageModel constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->table = '`Messages`';
    }

    /**
     * @return array de tous les messages
     */
    public function findAll() {
        $donnees =  parent::executerRequete();
        $data = array();
        foreach ($donnees as $key=>$values) {
            $plat = new Message($values);
            $data[] = $plat;
        }
        return $data;
    }

    /**
     * @return Message qui a été ajouté en dernier
     */
    public function findLast() {
        $data = array(
            'order' => 'id_message DESC LIMIT 1',
        );
        $donnees =  parent::executerRequete($data);
        return new Message($donnees[0]);
    }


    /**
     * @param Message $message
     * @return bool true if inserted the message in the database
     */
    public function insertMessage(Message $message) {
        $params = array(':email'=> $message->getEmail(), ':object'=> $message->getObject(),
            ':message'=> $message->getMessage(), ':date'=> 'NOW()');
        return parent::executerRequete($params, 'insert');
    }
}