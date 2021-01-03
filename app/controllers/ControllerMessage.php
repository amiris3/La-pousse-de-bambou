<?php

namespace app\controllers;

use app\entities\Message;
use app\languages\LanguageUsed;
use app\models\MessageModel;
use app\traits\AdminLoggedIn;

class ControllerMessage {
    use AdminLoggedIn;
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
        $this->redirectLogIn();
        $tab = ['adminMain', 'adminResa', 'adminClients', 'adminMessages', 'adminPlatsInsertUpdate', 'adminPlatsDelete'];
        $noms = ['Dashboard', 'Réservations', 'Clients', 'Messages'];
        $icons = ['home', 'restaurant', 'user', 'ui-message'];
        $messages = $this->model->findAll();
        include 'app/views/view_adminMessages.php';
    }

    public function showContact($lang) {
        $language = $lang;
        $langUsed = new LanguageUsed();
        $allLanguages = $langUsed->languages;
        $url = $langUsed->get_new_url();

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