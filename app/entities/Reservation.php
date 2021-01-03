<?php

namespace app\entities;

/**
 * Class Reservation
 * @package app\entities
 */
class Reservation {
    private $id_reservation;
    private $id_client;
    private $clients_nb;
    private $date;
    private $message;

    /**
     * Reservation constructor.
     */
    public function __construct($data) {
        $this->hydrate($data);
    }

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->id_reservation;
    }

    /**
     * @param mixed $id_reservation
     */
    public function setId_reservation($id_reservation)
    {
        $this->id_reservation = $id_reservation;
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
    public function getClientsNb()
    {
        return $this->clients_nb;
    }

    /**
     * @param mixed $clients_nb
     */
    public function setClients_nb($clients_nb)
    {
        $this->clients_nb = $clients_nb;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
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