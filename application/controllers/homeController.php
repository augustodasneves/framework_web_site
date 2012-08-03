<?php
class homeController extends baseController{
    
    function __construct() {
        parent::__construct();
        die(var_dump($this->system));
        $this->index();
    }
    
    public function index(){
        $this->render();
    }    
}