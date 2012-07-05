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
      define("NOME_SITE","madborges");
      define("LOCAL_PATH",$_SERVER['DOCUMENT_ROOT'].'framework_web_site/');
      define("CORE_PATH", LOCAL_PATH."core/");
      define("CLASS_PATH", LOCAL_PATH."core\class/");
      define("LIBS_PATH", LOCAL_PATH."core\libs/");
      define("UPLOAD_PATH", LOCAL_PATH."upload/");
      define("IMAGE_PATH", LOCAL_PATH."application\assets\img/");
      define("CONTROLLER_PATH", LOCAL_PATH."application\models/");
      define("VIEW_PATH", LOCAL_PATH."application/views/");
      define("HELPER_PATH", LOCAL_PATH."application\helpers/");
      define("JS_PATH", LOCAL_PATH."application\assets\js/");

      // SEO
      define("DESENVOLVEDOR","Augusto das Neves");
      define("REVISIT_GOOGLE","4");


      //MAIL SETTINGS
      define("EMAIL_SUPORTE","augustodasneves@hotmail.com");
      define("EMAIL_ADMIN","augustodasneves@hotmail.com");

      //URLS
      define("URL_BASE","http://localhost:81/framework_web_site/");
      
      //LOCALE
      define("LOCALE_DEFAULT","pt-BR");
      define("LANGUAGE_DEFAULT","pt-BR");
