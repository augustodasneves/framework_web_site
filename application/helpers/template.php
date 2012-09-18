<?php
class TemplateHelper {

    function assinaSEO($instTpl) {
        $this->adicionaTitle($instTpl, $_POST['title']);
        $this->adicionaDescription($instTpl, $_POST['description']);
        $this->adicionaKeywords($instTpl, $_POST['keywords']);
        $instTpl->assignGlobal("revisitagoogle", REVISIT_GOOGLE);
        $instTpl->assignGlobal("desenvolvedor", DESENVOLVEDOR);
        $instTpl->assignGlobal("nomesite", TITULO_SITE);
    }

    public static function assinaURLs($instTpl, $arrUrls) {
        foreach ($arrUrls as $url){
                $instTpl->assignGlobal($url['urlparam'], $url['newurl']);

        }
    }

    public static function assinaConstantes($instTpl) {
        $constantes = getConstantes();
        foreach ($constantes as $key => $value) {
            $instTpl->assignGlobal($key, $value);
        }
    }

    public static function adicionaScript($instTpl, $nomeScript) {
        $instTpl->newBlock('script');
        $instTpl->assign("nomeScript", $nomeScript);
    }

    public static function adicionaStyle($instTpl, $nomeStyle) {
        $instTpl->newBlock('style');
        $instTpl->assign("nomeStyle", $nomeStyle);
    }

    public static function adicionaTitle($instTpl, $title) {
        $instTpl->newBlock('title');
        $instTpl->assign("title", $title);
    }

    public static function adicionaDescription($instTpl, $description) {
        $instTpl->newBlock('description');
        $instTpl->assign("description", $description);
    }

    public static function adicionaKeywords($instTpl, $keywords) {
        $instTpl->newBlock('keywords');
        $instTpl->assign("keywords", $keywords);
    }

    function estruturaTemplate($nameTpl,$instTpl) {
        
        $template = new Smarty();
        
        $tplheader = new Smarty();
                
        $this->assinaSEO($tplheader);
        $this->adicionaScript($tplheader, $nameTpl);
        $this->adicionaStyle($tplheader, $nameTpl);
        
        $objHeader= $tplheader->fetch(VIEW_PATH . "include/header.tpl");
        
        $tplconceitual = new Smarty();
        $objConceitual= $tplconceitual->fetch(VIEW_PATH . "include/conceitual.tpl");

        $objConteudo = $instTpl;
        
        $this->assinaURLs($objConteudo,urlControl::buscaTodasUrl());

        $footer = new Smarty();
        $objFooter = $footer->fetch(VIEW_PATH . "include/footer.tpl");

        $template->assign('header', $objHeader);
        $template->assign('conceptual', $objConceitual);
        $template->assign('conteudo', $objConteudo);
        $template->assign('footer', $objFooter);

        $template->print();
    }
}