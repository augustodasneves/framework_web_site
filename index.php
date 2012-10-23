<?php

require('core/libs/template/Smarty.class.php');
require('core/misc.php');
require('config/config.main.php');
require('config/config.'.ESTADO_APLICACAO.'.php');
require('core/core.php');

session_start();

$core=new core();