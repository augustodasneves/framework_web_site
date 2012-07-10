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
        $this->language=new languageHandler(LANGUAGE_DEFAULT);
        $this->url=new urlControl();
        $this->url->verifyUrl();
    }
}