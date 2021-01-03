<?php

namespace app\entities;

/**
 * Class Message
 * @package app\entities
 */
class Message {
    private $id_message;
    private $email;
    private $object;
    private $message;
    private $date;

    /**
     * Message constructor.
     */
    public function __construct($data) {
        $this->hydrate($data);
    }

    /**
     * @return mixed
     */
    public function getIdMessage()
    {
        return $this->id_message;
    }

    /**
     * @param mixed $id_message
     */
    public function setId_message($id_message)
    {
        $this->id_message = $id_message;
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
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->object = $object;
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