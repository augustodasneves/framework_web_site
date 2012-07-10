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

    function estruturaTemplate($nameTpl) {
        $template = new TemplatePower(CORE_PATH . "estrutura.tpl");

        $header = new TemplatePower(VIEW_PATH . "include/header.tpl");
        $header->prepare();
        $this->assinaSEO($header);
        $this->adicionaScript($header, $nameTpl);
        $this->adicionaStyle($header, $nameTpl);
        $objHeader = $header->getOutputContent();

        $conceptual = new TemplatePower(VIEW_PATH . "include/conceitual.tpl");
        $conceptual->prepare();
        $objConceptual = $conceptual->getOutputContent();

        $conteudo = new TemplatePower(VIEW_PATH . $nameTpl);
        $this->assinaURLs($conteudo,urlControl::buscaTodasUrl());
        $conteudo->prepare();
        $objConteudo = $conteudo->getOutputContent();

        $footer = new TemplatePower(VIEW_PATH . "include/footer.tpl");
        $footer->prepare();
        $objFooter = $footer->getOutputContent();

        $template->assignGlobal('header', $objHeader);
        $template->assignGlobal('conceptual', $objConceptual);
        $template->assignGlobal('conteudo', $objConteudo);
        $template->assignGlobal('footer', $objFooter);

        $template->prepare();
        $template->printToScreen();
    }
}
