<?php

namespace app\entities;

/**
 * Class Client
 * @package app\entities
 */
class Client {
    private $id_client;
    private $nom_client;
    private $email;
    private $tel;

    /**
     * Client constructor.
     */
    public function __construct($data) {
        $this->hydrate($data);
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @param mixed $id_client
     */
    public function setId_client($id_client)
    {
        $this->id_client = $id_client;
    }

    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->nom_client;
    }

    /**
     * @param mixed $nom_client
     */
    public function setNom_client($nom_client)
    {
        $this->nom_client = $nom_client;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /** hydrate function
     * @param $data
     */
    public function hydrate($data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            } else echo 'problem';
        }
    }


}