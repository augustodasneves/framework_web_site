<?php

      // SITE
      define("TITULO_SITE","MadBorges");

      //DB Constants
      define("DB_HOST", "localhost");
      define("DB_NAME", "madborges");
      define("DB_USER", "root");
      define("DB_PASS", "");
      define("DB_DRIVER", "mysql");
      define("DB_PORT", "3306");



//      define("DB_HOST", "AUGUSTO-NOTE");
//      define("DB_NAME", "madborges");
//      define("DB_USER", "augusto");
//      define("DB_PASS", "150508ab");
//      define("DB_DRIVER", "dblib");

      //PATH ENVIROMENTS
      define("LOCAL_PATH",$_SERVER['DOCUMENT_ROOT'].'madborges/');
      define("CORE_PATH", LOCAL_PATH."core/");
      define("CLASS_PATH", LOCAL_PATH."core\class/");
      define("UPLOAD_PATH", LOCAL_PATH."upload/");
      define("IMAGE_PATH", LOCAL_PATH."app\assets\img/");
      define("CONTROLLER_PATH", LOCAL_PATH."app\models/");
      define("VIEW_PATH", LOCAL_PATH."app/views/");
      define("HELPER_PATH", LOCAL_PATH."app\helpers/");
      define("JS_PATH", LOCAL_PATH."app\assets\js/");

      // SEO
      define("DESENVOLVEDOR","Augusto das Neves");
      define("REVISIT_GOOGLE","4");


      //MAIL SETTINGS
      define("EMAIL_SUPORTE","augustodasneves@hotmail.com");
      define("EMAIL_ADMIN","augustodasneves@hotmail.com");

      //URLS
      define("URL_BASE","http://localhost:81/madborges/");
?>