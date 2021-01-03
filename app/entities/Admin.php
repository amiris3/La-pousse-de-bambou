<?php

namespace app\entities;

/**
 * Class Admin
 * @package app\entities
 */
class Admin {
    private $id_admin;
    private $login;
    private $mdp;

    /**
     * Admin constructor.
     */
    public function __construct($data) {
        $this->hydrate($data);
    }

    /**
     * @return mixed
     */
    public function getIdAdmin()
    {
        return $this->id_admin;
    }

    /**
     * @param mixed $id_admin
     */
    public function setId_admin($id_admin)
    {
        $this->id_admin = $id_admin;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /** hydrate function
     * @param $data
     */
    public function hydrate($data) {
        foreach ($data as $key => $value) {

            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


}