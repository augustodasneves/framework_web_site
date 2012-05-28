<?php

ob_start();

ini_set("error_reporting",0);
error_reporting(E_ALL);
ini_set("default_charset","UTF-8");
require('core/libs/template/class.TemplatePower.inc.php');
require('core/libs/misc.php');
require('config/config.main.php');
require('core/core.php');

$core=new core;
?>
