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


//if($tplHelper->verificaTemplate($tpl,$nameController)){
//    switch($in){
//        default:2
//        case 'padrao':
//
//        break;
//    }
//}

//    $erroClass=new customError($_SERVER['PHP_SELF'],"404", "teste");
//    $emailErro=$erroClass->emailParaSuporte();
//    if($emailErro){
//        print("enviou");
//    }else{
//        print("ñ enviou");
//    }

//MONTA TEMPLATE
$tplHelper->estruturaTemplate($nameController);
ob_end_flush();
?>