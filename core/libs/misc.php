<?php
    function getArquivosDir($dir){
          $pasta=scandir($dir);
          unset($pasta[0]);
          unset($pasta[1]);

          foreach($pasta as $arquivo){
              if($arquivo!=".svn")
                require strval($dir.$arquivo);
          }
    }

    function getConstantes(){
        $constantes=get_defined_constants(true);
        return $constantes['user'];
    }
?>
