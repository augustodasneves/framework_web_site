<?php

      define("ESTADO_APLICACAO","development"); //DEVELOPMENT - PRODUCTION
      
      // SITE
      define("TITULO_SITE","MadBorges");
      
      //PATH ENVIROMENTS
      define("NOME_SITE","MadBorges");
      define("LOCAL_PATH",$_SERVER['DOCUMENT_ROOT'].'framework_web_site/');
      define("CORE_PATH", LOCAL_PATH."core/");
      define("CLASS_PATH", LOCAL_PATH."core\class/");
      define("LIBS_PATH", LOCAL_PATH."core\libs/");
      define("UPLOAD_PATH", LOCAL_PATH."upload/");
      define("IMAGE_PATH", LOCAL_PATH."application\assets\img/");
      define("CONTROLLER_PATH", LOCAL_PATH."application\controllers/");
      define("MODEL_PATH", LOCAL_PATH."application\models/");
      define("VIEW_PATH", LOCAL_PATH."application/views/");
      define("HELPER_PATH", LOCAL_PATH."application\helpers/");
      define("JS_PATH", LOCAL_PATH."application\assets\js/");
      