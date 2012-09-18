<?php
class baseController {
    public $model;
    public $view;
    public $system;
    
    protected function __construct() {
        $on=$_POST['on'];
        $this->setView($on);
        $this->setModel($on);
        $this->setSystem();
        getArquivosDir(HELPER_PATH);
    }
    
    private function setModel($model) {
        $traceModel=MODEL_PATH.$model."Model.php";
        require_once($traceModel);
        $infoModel=$model."Model";
        $instModel=new $infoModel();
        $this->model = $instModel;
    }

    private function setView($view) {
        $nameView=$view.".tpl";
        $this->view=new Smarty();
    }
    
    private function setSystem(){
        global $system;
        $this->system=$system;
    }
    
    public function render(){
        //$nameView=sessionHandler::getSession("on").".tpl";
        $tplHelper=new TemplateHelper();
        $this->preDispatch();
        $tplHelper->estruturaTemplate($nameView,$this->view);
    }
    
    public function preDispatch(){
        
    }
}