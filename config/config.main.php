<?php

      define("ESTADO_APLICACAO","development"); //DEVELOPMENT - PRODUCTION
      
      // SITE
      define("TITULO_SITE","MadBorges");
      
      //PATH ENVIROMENTS
      define("NOME_SITE","MadBorges");
      define("LOCAL_PATH",$_SERVER['DOCUMENT_ROOT'].'framework_web_site/');
      
      define("CORE_PATH", LOCAL_PATH."core/");
      define("UPLOAD_PATH", LOCAL_PATH."upload/");
      define("APPLICATION_PATH", LOCAL_PATH."application/");
      
      //CORE - PATHS
      define("CLASS_PATH", CORE_PATH."class/");
      define("LIBS_PATH", CORE_PATH."libs/");
      define("I18N_PATH", CORE_PATH."i18n/");
      
      
      //APPLICATION - PATHS
      define("IMAGE_PATH", APPLICATION_PATH."\assets\img/");
      define("CONTROLLER_PATH", APPLICATION_PATH."controllers/");
      define("MODEL_PATH", APPLICATION_PATH."models/");
      define("VIEW_PATH", APPLICATION_PATH."views/");
      define("HELPER_PATH", APPLICATION_PATH."helpers/");
      define("JS_PATH", APPLICATION_PATH."assets\js/");