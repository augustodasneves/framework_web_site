<?php
/**
 * Description of languageHandler
 *
 * @author Augusto
 */
class languageHandler {
    private $language;
    private $encode;
    
    public function __construct($language_default=null){
        $this->language=$language_default;
    }
    
    public function getLanguage() {
        return $this->language;
    }

    public function setLanguage($language){
        $this->language = $language;
    }

    public function getEncode() {
        return $this->locale;
    }

    public function setEnconde($encode) {
        $this->encode = $encode;
    }

    public function alteraLinguagem($language,$encode){
        sessionHandler::setSession('lang',$language);
        setlocale(LC_ALL,$language);
    }
}