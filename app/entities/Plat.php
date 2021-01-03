<?php

namespace app\entities;

/**
 * Class Plat
 * @package app\entities
 */
class Plat {
    private $id_plat;
    private $nom_plat;
    private $description;
    private $id_type;
    private $prix_euros;
    private $img_plat;

    /**
     * Plat constructor.
     */
    public function __construct($data) {
        $this->hydrate($data);
    }

    /**
     * @return mixed
     */
    public function getIdPlat()
    {
        return $this->id_plat;
    }

    /**
     * @param mixed $id_plat
     */
    public function setId_plat($id_plat)
    {
        $this->id_plat = $id_plat;
    }

    /**
     * @return mixed
     */
    public function getNomPlat()
    {
        return $this->nom_plat;
    }

    /**
     * @param mixed $nom_plat
     */
    public function setNom_plat($nom_plat)
    {
        $this->nom_plat = $nom_plat;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getPrixEuros()
    {
        return $this->prix_euros;
    }

    /**
     * @param mixed $prix_euros
     */
    public function setPrix_euros($prix_euros)
    {
        $this->prix_euros = $prix_euros;
    }

    /**
     * @return mixed
     */
    public function getImgPlat()
    {
        return $this->img_plat;
    }

    /**
     * @param mixed $img_plat
     */
    public function setImg_plat($img_plat)
    {
        $this->img_plat = $img_plat;
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