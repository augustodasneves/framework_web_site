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
    public static function startSession(){
        session_start();
    }
    
    public static function setSession($key,$value){
        $_SESSION[$key]=$value;
    }
    
    public static function getAllSession(){
        return session_encode();
    }
    
    public static function existeSession($nameSession){
        return $valido=session_is_registered($nameSession)?true:false;
    }
    
    public static function endSession(){
        session_destroy();
    }
}
?>