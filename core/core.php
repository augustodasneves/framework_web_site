<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of core
 * @author Augusto
 */

class core {
    function __construct() {
        $this->getLibs();
        $this->getClasses();
        $this->instanciaObjs();
    }

    public function getClasses(){
        getArquivosDir(CLASS_PATH);
    }

    public function getLibs(){
        getArquivosDir(LIBS_PATH);
    }

    public function instanciaObjs(){
        $url=new urlControl();
        $url->verifyUrl();
    }

}

