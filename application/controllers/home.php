<?php
//FAZ O BUFFER DA PÁGINA
ob_start();

$nameController=$_POST['on'].'.tpl';

//INCLUDE DE HELPERS
getArquivosDir(HELPER_PATH);

$tplHelper=new TemplateHelper();

//MONTA TEMPLATE
$tpl = new TemplatePower();

//ASSINA CONSTANTES
$tplHelper->assinaConstantes($tpl);

//MONTA TEMPLATE
$tplHelper->estruturaTemplate($nameController);
ob_end_flush();