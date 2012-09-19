<?php
class core {
    public $url;
    public $db;
    public $language;
    
    function __construct() {     
        $this->getClasses();
        $this->getLibs();
        $this->instanciaObjs();
    }

    public function getClasses(){
        getArquivosDir(CLASS_PATH);
    }

    public function getLibs(){
        getArquivosDir(LIBS_PATH);
    }

    public function instanciaObjs(){
        global $system;
        $system=$this;
        
        $this->db=db::getInstance();
        $this->language=new languageHandler(LANGUAGE_DEFAULT,ENCODE_DEFAULT);
        $this->url=new urlControl();
        $this->url->verifyUrl();
    }
}