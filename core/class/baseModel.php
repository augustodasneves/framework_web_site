<?php
class baseModel{
    private $db;
    private $name;
    
    
    function __construct(){
        $this->db=db::getInstance();
        $this->setName($_POST['on']);
        $this->getColumns();        
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


    public function save(){
        $this->db->insert($this->name,$arrayFields,$arrayData);
    }
    
    public function delete($id=null){
        $this->db->delete($this->name,$this->id);
    }
    
    public function find($id=null){
        
    }
    
    public function getAllData(){
        
    }
    
    public function getColumns(){
        $sql="SHOW COLUMNS FROM ".$this->name;
//        die(var_dump($sql));
        $dadosColunas=$this->db->executeQuery($sql);
        foreach($dadosColunas as $coluna){
            $this->$coluna['Field']=$coluna['Type'];
        }
    }
}