<?php
/**
 * Description of urlControl
 *
 * @author Augusto
 */
class urlControl{
    public $pg;
    
    public function verifyUrl(){
        //DEFINE URL E VARIAVES PASSADAS PELA URL
        $url=$_SERVER['REQUEST_URI']!=''?$_SERVER['REQUEST_URI']:$url='home';
        $variaveis=$this->defineVariaveis($url);
                
        $url=explode("/",$url);
        $url=$url[2];

        $dadosUrl=$this->buscaUrl($url);
        $this->quebraParams($dadosUrl['urlparam']);
        unset($dadosUrl['idurlcontrol'],$dadosUrl['urlparam'],$dadosUrl['newurl'],$dadosUrl['id_url_canonical']);
        $this->defineSEO($dadosUrl);
        if(!empty($_POST['on'])){
            $this->defineNovaPagina($_POST['on']);
        }else{
            $this->defineNovaPagina('404');
        }
    }

    public function buscaUrl($requisicao){
        $banco=db::getInstance();
        $_GET['on']=empty($_GET['on'])?"":$_GET['on'];
        $sql='SELECT * FROM urlcontrol WHERE newurl="'.$requisicao.'" OR urlparam="on='.$_GET['on'].'"';
        $dados=$banco->executeQuery($sql);
        $dados=$dados[0];
        $banco=null;
        return $dados;
    }

    public static function buscaTodasUrl(){
        $banco=db::getInstance();
        $sql='SELECT urlparam,newurl FROM urlcontrol';
        $dados=$banco->executeQuery($sql);
        $banco=null;

        return $dados;
    }

    public function defineNovaPagina($pagina){
        $this->pg=$pagina;
        if($this->pg=='404'):
            try{
                $dadosUrl=$this->buscaUrl('erro-404-pagina-nao-encontrada.html');
                $this->quebraParams($dadosUrl['urlparam']);
                unset($dadosUrl['idurlcontrol'],$dadosUrl['urlparam'],$dadosUrl['newurl'],$dadosUrl['id_url_canonical']);
                $this->defineSEO($dadosUrl);
                header("HTTP/1.0 404 Not Found");
                include CONTROLLER_PATH.$this->pg.'.php';
            }catch(Exception $e){
                die($e->getCode());
            }
        else:
            try{
                $controller=$this->pg.'Controller';
                require_once CONTROLLER_PATH.$controller.".php";
                new $controller;
            }catch(Exception $e){
                die($e->getMessage());
            }
        endif;
    }

    public function quebraParams($parametros){
        if(!is_null($parametros)){
            $arrParams[]=explode("&",$parametros);
            foreach($arrParams as $param){
                foreach($param as $par)
                    $paramQuebrado[]=explode("=",$par);
            }
            if(count($paramQuebrado)>0){
                foreach($paramQuebrado as $varPost){
                    $_POST[$varPost[0]]=$varPost[1];
                }
            }
        }
    }

    public function defineSEO($dadosSEOpagina){
        if($dadosSEOpagina!=''){
            foreach($dadosSEOpagina as $key=>$value){
                $_POST[$key]=$value;
            }
        }
    }

    public function defineVariaveis($uri){
//        if(strstr()){
//            
//        }
    }
}
