<?php
/**
 * Description of languageHandler
 *
 * @author Augusto
 */
class languageHandler {
    public $language;
    public $encode;
    private $languageSource;
    public $languageText;
        
    public function __construct($language_default=null,$encode_default=null){
        $this->setLanguage($language_default);
        $this->setEnconde($encode_default);
        $this->setLanguageSource($language_default);
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
        session_Handler::setSession('lang',$language);
        setlocale(LC_ALL,$language);
        $this->setLanguageSource($language);
    }
    
    public function setLanguageSource($languageSource){
        if(is_file(I18N_PATH.$languageSource.'.php')){
            require_once(I18N_PATH.$languageSource.'.php');
            $this->languageText=getText();
        }
    }
    
    
    
}