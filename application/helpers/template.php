<?
class TemplateHelper {

    function assinaSEO($instTpl) {
        $this->adicionaTitle($instTpl, $_POST['title']);
        $this->adicionaDescription($instTpl, $_POST['description']);
        $this->adicionaKeywords($instTpl, $_POST['keywords']);
        $instTpl->assign("revisitagoogle", REVISIT_GOOGLE);
        $instTpl->assign("desenvolvedor", DESENVOLVEDOR);
        $instTpl->assign("publisher", DESENVOLVEDOR);
        $instTpl->assign("nomesite", TITULO_SITE);
    }

    public static function assinaURLs($instTpl, $arrUrls) {
        $instTpl->assign('url', $arrUrls);
    }

    public static function assinaConstantes($instTpl) {
        $constantes = getConstantes();
        foreach ($constantes as $key => $value) {
            $instTpl->assign($key, $value);
        }
    }

    public static function adicionaScript($instTpl, $nomeScript) {
        $instTpl->assign("nomeScript", $nomeScript);
    }

    public static function adicionaStyle($instTpl, $nomeStyle) {
        $instTpl->assign("nomeStyle", $nomeStyle);
    }

    public static function adicionaTitle($instTpl, $title) {
        $instTpl->assign("title", $title);
    }

    public static function adicionaDescription($instTpl, $description) {
        $instTpl->assign("description", $description);
    }

    public static function adicionaKeywords($instTpl, $keywords) {
        $instTpl->assign("keywords", $keywords);
    }

    function estruturaTemplate($nameTpl,$instTpl) {
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
        
        $template = new Smarty();
        $template->assign('lang', session_Handler::getSession('lang'));
        $template->assign('header', $objHeader);
        $template->assign('conceptual', $objConceitual);
        $template->assign('conteudo', $objConteudo);
        $template->assign('footer', $objFooter);
        
        $template->display(CORE_PATH. "estrutura.tpl");
    }
}