<?php
/**
 * Description of core
 * @author Augusto
 */

class core {
    private $url;
    private $db;
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
        $this->url=new urlControl();
        $this->url->verifyUrl();
    }
}

