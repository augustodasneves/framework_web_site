<?php

//FAZ O BUFFER DA PÁGINA
$nameView=$_POST['on'].'.tpl';

//INCLUDE DE HELPERS
getArquivosDir(HELPER_PATH);

$tplHelper=new TemplateHelper();

//MONTA TEMPLATE
$tpl = new TemplatePower();

//ASSINA CONSTANTES
$tplHelper->assinaConstantes($tpl);

//MONTA TEMPLATE
$tplHelper->estruturaTemplate($nameView);
