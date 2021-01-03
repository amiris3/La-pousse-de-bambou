<?php

namespace app\controllers;

use app\entities\Message;
use app\models\MessageModel;

class ControllerMessage {
    private $model;

    /**
     * ControllerMessage constructor.
     */
    public function __construct() {
        $this->model = new MessageModel();
    }

    /**
     * @return MessageModel model
     */
    public function getModel()
    {
        return $this->model;
    }

    public function showAdminMessages() {
        $messages = $this->model->findAll();
        include 'app/views/view_adminMessages.php';
    }

    public function showContact() {
        if (isset($_POST['submit'])) { // formulaire soumis
            $message = new Message([
                'email' => $_POST['email'],
                'object' => addslashes($_POST['subject']),
                'message' => addslashes($_POST['message']) . ' envoyé par ' . addslashes($_POST['name']) . ' ',
            ]);
            $this->model->insertMessage($message);
        }
        include 'app/views/view_contact.php';
    }
}