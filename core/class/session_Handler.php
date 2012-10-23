<?
class session_Handler{
    private function __construct() {
        $this->startSession();
    }
    public static function startSession(){
        if(!isset($_SESSION)){
            session_start();
        }
    }
    
    public static function setSession($key,$value){
        session_Handler::startSession();
        $_SESSION[$key]=$value;
    }
    
    public static function getAllSession(){
        return session_encode();
    }
     
    public static function existeSession($nameSession){
        return $valido=empty($_SESSION['$nameSession'])?true:false;
    }
    
    public static function getSession($nameSession){
        session_Handler::startSession();
        if(session_Handler::existeSession($nameSession)){
            return $_SESSION[$nameSession];
        }
    }
    
    public static function endSession(){
        session_destroy();
    }
}
