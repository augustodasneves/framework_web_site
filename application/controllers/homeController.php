<?php
class homeController extends baseController{
    
    function __construct() {
        parent::__construct();
        $this->index();
    }
    
    public function index(){
//        var_dump($this);
        $this->render();
    }    
}