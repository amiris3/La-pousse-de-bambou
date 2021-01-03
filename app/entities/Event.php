<?php


namespace app\entities;


class Event {
    public $nom;
    public $img;
    public $prix;
    public $italic;
    public $_1;
    public $_2;
    public $_3;
    public $p;

    /**
     * Event constructor.
     * @param $nom
     * @param $img
     * @param $prix
     * @param $italic
     * @param $_1
     * @param $_2
     * @param $_3
     * @param $p
     */
    public function __construct($nom, $img, $prix, $italic, $_1, $_2, $_3, $p) {
        $this->nom = $nom;
        $this->img = $img;
        $this->prix = $prix;
        $this->italic = $italic;
        $this->_1 = $_1;
        $this->_2 = $_2;
        $this->_3 = $_3;
        $this->p = $p;
    }

}