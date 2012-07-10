<?php
/**
 * Description of sessionHandler
 *
 * @author Augusto
 */
class sessionHandler{
    private function __construct() {
        $this->startSession();
    }
    public function startSession(){
        session_start();
    }
    
    public function setSession($key,$value){
        $_SESSION[$key]=$value;
    }
    
    public function getAllSession(){
        return session_encode();
    }
    
    public function existeSession($nameSession){
        return $valido=session_is_registered($nameSession)?true:false;
    }
    
    public function endSession(){
        session_destroy();
    }
}
?>