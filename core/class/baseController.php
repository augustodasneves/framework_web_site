<?php
class baseController {
    public $model;
    public $view;
    
    private function setModel($model) {
        $traceModel=MODEL_PATH.$model."Model.php";
        require_once($traceModel);
        $infoModel=$model."Model";
        $instModel=new $infoModel();
        $this->model = $instModel;
    }

    private function setView($view) {
        $nameView=$view.".tpl";
        $this->view=new TemplatePower(VIEW_PATH.$nameView);
    }

    protected function __construct() {
        $on=$_POST['on'];
        $this->setView($on);
        $this->setModel($on);
        getArquivosDir(HELPER_PATH);
    }
    
    public function render(){
        $nameView=$_POST['on'].".tpl";
        $tplHelper=new TemplateHelper();
        $tplHelper->estruturaTemplate($nameView,$this->view);
    }
}
