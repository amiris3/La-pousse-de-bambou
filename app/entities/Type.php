<?php


namespace app\entities;

/**
 * Class Type
 * @package app\entities
 */
class Type {
    private $id_type;
    private $nom_type;

    /**
     * Type constructor.
     */
    public function __construct($data) {
        $this->hydrate($data);
    }

    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * @param mixed $id_type
     */
    public function setId_type($id_type)
    {
        $this->id_type = $id_type;
    }

    /**
     * @return mixed
     */
    public function getNomType()
    {
        return $this->nom_type;
    }

    /**
     * @param mixed $nom_type
     */
    public function setNom_type($nom_type)
    {
        $this->nom_type = $nom_type;
    }

    /**
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