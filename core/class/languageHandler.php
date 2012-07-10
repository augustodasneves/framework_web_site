<?php
/**
 * Description of languageHandler
 *
 * @author Augusto
 */
class languageHandler {
    private $language;
    private $encode;
    
    public function getLanguage() {
        return $this->language;
    }

    public function setLanguage($language) {
        $this->language = $language;
    }

    public function getEncode() {
        return $this->locale;
    }

    public function setEconde($encode) {
        $this->encode = $encode;
    }

    public function alteraLinguagem($language,$encode){
        $_SESSION['lang']=$language;
        setlocale(LC_ALL,$language);
    }
}
