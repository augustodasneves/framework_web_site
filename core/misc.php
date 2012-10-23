<?
    function getArquivosDir($dir){
        $pasta=scandir($dir);
        unset($pasta[0]);
        unset($pasta[1]);
        
        foreach($pasta as $arquivo){
            if(is_readable($dir.$arquivo) && is_file($dir.$arquivo)){
                require_once(strval($dir.$arquivo));
            }
        }
    }

    function getConstantes(){
        $constantes=get_defined_constants(true);
        return $constantes['user'];
    }
    
    function loadFile($fileToLoad){
        return file_get_contents($fileToLoad);
    }