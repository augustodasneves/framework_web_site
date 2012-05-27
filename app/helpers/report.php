<?php

class customError{
    private $codigo,$origem,$mensagem;
    public function __construct($codigo,$origem,$mensagem) {
        $this->codigo=$codigo;
        $this->origem=$origem;
        $this->mensagem=$mensagem;
    }
public function emailParaSuporte(){
    $this->logDB();

    $mail=new PHPMailer();

    $mail->IsSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->Port="465";
    $mail->SMTPAuth=true;
    $mail->SMTPSecure = "ssl";
    $mail->CharSet="utf-8";
    $mail->Username='augustomasterstudioweb@gmail.com';
    $mail->Password='150508ab';

    $mail->SetFrom("augustomasterstudioweb@gmail.com","TESTE AUGUSTO");
    $mail->Subject=TITULO_SITE." - Log de Erro - ".$this->codigo;
    $mail->AddAddress(EMAIL_SUPORTE,"Administração Framework");

    $bodyErro="";
    $bodyErro.="<h1>".TITULO_SITE."</h1>";
    $bodyErro.="<h2>Log de Erro</h2>";
    $bodyErro.="<strong>Código do erro: </strong>".$this->codigo."<br/>";
    $bodyErro.="<strong>Descrição do erro: </strong>".$this->mensagem."<br/>";
    $bodyErro.="<strong>Data/Hora: </strong>".time()."<br/>";


    $mail->MsgHTML($bodyErro);

    if($mail->Send()){
      return true;
    }else{
      return false;
    }
}

public function logDB(){
    $instBanco=new db();
    $instBanco->insert("log",array("codigo","mensagem","ip_usuario","navegador_usuario"),array("'".$this->codigo."'","'".$this->mensagem."'","'".$_SERVER['REMOTE_ADDR']."'","'".$_SERVER['HTTP_USER_AGENT']."'"));
}

}
?>