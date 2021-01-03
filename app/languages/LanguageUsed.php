<?php

namespace app\languages;

class LanguageUsed {
    public $languages;

    /**
     * LanguageUsed constructor.
     */
    public function __construct()
    {
        $this->languages = array( 'fr', 'en', 'de', "zh");
        $this->set_lang_id( $this->get_lang_id());
    }

    public function init_language() {
        switch ($this->get_lang_id()) {
            case 'en':
                return new EnglishLang();
            case 'de':
                return new GermanLang();
            case 'zh':
                return new MandarinLang();
            default:
                return new FrenchLang();
        }
    }

    /**
     * @param $lang_id
     * @return bool true if the language is supported, false if not
     */
    public function is_language_supported( $lang_id ) {
        return in_array( $lang_id, $this->languages );
    }

    /**
     * @param $lang_id
     * @return bool if the language is set (in a $_SESSION['lang']) and if it fits requirements
     */
    function set_lang_id( $lang_id ) {
        if ( (strlen( $lang_id ) == 2) AND $this->is_language_supported( $lang_id ) ) {
            $_SESSION['lang'] = $lang_id;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return string the language id currently in use
     */
    public function get_lang_id() {
        return ( isset( $_SESSION['lang'] )
            && (strlen( $_SESSION['lang']  ) == 2)
            && $this->is_language_supported( $_SESSION['lang'] ) )
            ? htmlspecialchars($_SESSION['lang']) : $this->languages[0];
    }

    /**
     * @return string of the new url with the language change request, staying on the same page
     */
    public function get_new_url() {
        $url = str_replace('/', '', $_SERVER['REQUEST_URI']);
        if (stristr($url, '?')) {
            if (isset($_GET['lang'])) {
                $url = substr_replace($url ,"", -2);
            } else $url .= '&lang=';
        }
        else {
            $url = '?lang=';
        }
        return $url;
    }

    /**
     * @param $price_euros
     * @return string of the new price with correct monetary symbol
     */
    public function changePriceAccordingly($price_euros) {
        switch ($this->get_lang_id()) {
            case 'en':
                return "£".$price_euros*0.88;
            case 'zh':
                return $price_euros*7.89."元";
            default:
                return $price_euros."€";
        }
    }


}