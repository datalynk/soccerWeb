<?php

class ConnectionMYSQL{
    
    private $_user_name;
    private $_password;
    private $_serverIP;
    private $_db_handle;
    private $_database;
    
    function __construct($user_name,$password,$serverIP) {
        $this->_user_name = $user_name;
        $this->_password = $password;
        $this->_serverIP = $serverIP;
    }

    /*
     * Abre conecção com o SGBD mysql. Guarda a conecção na variável $_db_handle
     */
    function connect(){
        $this->_db_handle = mysql_connect($this->_serverIP, $this->_user_name, $this->_password);

        if (!$this->_db_handle) {
            die('Não foi possível conectar: ' . mysql_error());
        }
    }
    
    /*
     * Seleciona o banco. Guarda o banco na variável $_db_handle
     * $database: nome do banco de dados, em formato string
     */   
    function select_database($database){
        $this->_database = $database;
        $db_found = mysql_select_db($database, $this->_db_handle);    
        
        if (!$db_found) {
            die ('Não foi possível selecionar o banco ' . $database . ': ' . mysql_error());
        }
        
    }
 
    /*
     * Executa a query
     * $query: query a ser executada pelo banco (INSERT, QUERY, ALTER, ...), em formato string
     */  
    function execute($query){
        $result = mysql_query($query);
        if (!$result) {
            $message  = 'Consulta inválida: ' . mysql_error() . "\n";
            $message .= 'Query: ' . $query;
            die($message);
        }
        return $result;
    }
    
    function disconnect(){
        mysql_close($this->_db_handle);
    }
    
    
    function get_user_name(){
        return $this->_user_name;
    }
    function set_user_name($user_name){
        $this->_user_name = $user_name;
    }
    function get_password(){
        return $this->_password;
    }
    function set_password($password){
        $this->_password = $password;
    }
    function get_serverIP(){
        return $this->_serverIP;
    }
    function set_serverIP($serverIP){
        $this->_serverIP = $serverIP;
    }
    function get_database(){
        return $this->_database;
    }
    function set_database($database){
        $this->_database = $database;
    }
    
}


?>