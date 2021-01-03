<?php


namespace app\languages;


abstract class Lang {

    public $lang;

    /**
     * Lang constructor.
     */
    public function __construct()
    {
        $this->lang = array();
        $this->lang['nomSite'] = 'La pousse de bambou';
        $functions = ['Accueil', 'Events', 'About', 'Gallery', 'Footer', 'Menu', 'Contact', 'Book'];
        foreach ($functions as $value) {
            $function = 'lang'.$value;
            $this->$function();
        }
    }

    abstract function langAccueil();
    abstract function langEvents();
    abstract function langAbout();
    abstract function langGallery();
    abstract function langMenu();
    abstract function langFooter();
    abstract function langContact();
    abstract function langBook();

}