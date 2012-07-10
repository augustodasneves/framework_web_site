<?php
//FAZ O BUFFER DA PÁGINA
ob_start();

//INCLUDE DE HELPERS
getArquivosDir(HELPER_PATH);

$tplHelper=new TemplateHelper();

extract($_POST);

//MONTA TEMPLATE
$tpl = new TemplatePower();
$nameController = explode('\\', __FILE__);
$nameController = explode('.', $nameController[6]);
$nameController = $nameController[0] . ".tpl";

//ASSINA CONSTANTES
$tplHelper->assinaConstantes($tpl);

if($tplHelper->verificaTemplate($tpl,$nameController)){

}

//MONTA TEMPLATE
$tplHelper->estruturaTemplate($nameController);
