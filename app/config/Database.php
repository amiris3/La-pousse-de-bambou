<?php

namespace app\config;

/**
 * Class Database
 * @package app\config
 * provides connexion to the database
 */
class Database {

    //attributs
    private $serveur = 'localhost';
    private $user = 'root';
    private $mdp = 'mysql';
    private $bd = 'LaPousseDeBambou';
    private $connexion;

    //fonctions
    public function getConnexion() {
        $this->connexion = null;

        try {
            $this->connexion = new \PDO('mysql:host=' . $this->serveur . ';dbname=' . $this->bd,
                $this->user, $this->mdp);
            $this->connexion->exec("SET CHARACTER SET utf8");    //Gestion des accents

        } catch (\PDOException $e) {
            echo 'Erreur : ' . $e->getMessage() . '<br />';
            echo 'N° : ' . $e->getCode();
        }
        return $this->connexion;
    }


}