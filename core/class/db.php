<?php
class db extends PDO{
    private static $instance;
    private $db_driver;
    private $db_name;
    private $db_host;
    private $db_user;
    private $db_pass;
    private $dados;

    /**
     * Setar Driver do Banco de Dados
     * @since v1.0
     * @param type $db_driver
     */
    public function setDb_driver($db_driver) {
        $this->db_driver = $db_driver;
    }

    /**
     * Setar Nome do Banco de Dados
     * @since v1.0
     * @param type $db_name
     */
    public function setDb_name($db_name) {
        $this->db_name = $db_name;
    }

    /**
     * Setar Nome do Host
     * @since v1.0
     * @param type $db_host
     */
    public function setDb_host($db_host) {
        $this->db_host = $db_host;
    }

    /**
     * Setar Nome do Host
     * @since v1.0
     * @param type $db_user
     */
    public function setDb_user($db_user) {
        $this->db_user = $db_user;
    }

    /**
     * Setar Senha do Banco.
     * @since v1.0
     * @param type $db_pass
     */
    public function setDb_pass($db_pass) {
        $this->db_pass = $db_pass;
    }

        public function __construct(){
        try{
            parent::__construct(DB_DRIVER.":host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME,DB_USER, DB_PASS);
        }catch(PDOException $e){
            die("Não foi possível realizar a conexão com a base de dados
                    <br/>Código do erro:".$e->getCode()."
                    <br/>Mensagem do erro:".$e->getMessage()
            );
        }
    }

    /**
     * Método para verificação de instância unica - Singleton
     * @return Instância de db
     */
    public static function getInstance(){
        if(!isset(self::$instance)){
            $banco=__CLASS__;
            self::$instance=new $banco;
        }
            return self::$instance;

    }

    /**
     * Método para execução de sqls
     * @param string $sql
     * @return array
     */
    public function executeQuery($sql){
        if($sql!=''){
            try{
                $this->dados=$this->query($sql);
                $this->dados=$this->dados->fetchAll(PDO::FETCH_ASSOC);
                return $this->dados;
            }catch(PDOException $e){
                die("ERRO AO REALIZAR CONSULTA A BASE DE DADOS.<br/>
                     MENSAGEM DE ERRO:".$e->getMessage()."<br/>
                     CÓDIGO DO ERRO:".$e->getCode()."
                    ");
            }
        }else{
            die("ERRO AO REALIZAR CONSULTA A BASE DE DADOS.<br/>
                     MENSAGEM DE ERRO:Não foi informada a instrução SQL<br/>
                ");
        }
    }

    public function insert($table,$fields,$values){
        $fields=implode(",", $fields);
        $values=implode(",",$values);

        $sql="INSERT INTO ".$table."(".$fields.") VALUES(".$values.")";
        $rows=$this->executeQuery($sql);
    }
}
?>