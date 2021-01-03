<?php


namespace app\entities;


class Testimony {
    private $avis;
    private $nom;
    private $job;

    /**
     * Testimony constructor.
     * @param $avis
     * @param $nom
     * @param $job
     */
    public function __construct($nom, $job, $avis)
    {
        $this->avis = $avis;
        $this->nom = $nom;
        $this->job = $job;
    }

    /**
     * @return String
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * @return String
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return String
     */
    public function getJob()
    {
        return $this->job;
    }

}