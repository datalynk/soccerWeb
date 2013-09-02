<?php
date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'conexao.php';

function do_query($query){
    $USER = 'root';
    $PASSWORD = 'senha1';
    $IP = 'localhost';
    $DATABASE = 'soccer';
    $db = new ConnectionMYSQL($USER,$PASSWORD,$IP);
    $db->connect();
  
    $db->select_database($DATABASE);
     
    $result = $db->execute($query);
    $db->disconnect();
    
    return $result;
}

function email_is_correct($email){
    $result = do_query("select email from jogador where email = '" . $email . "'");
    
    $row = mysql_fetch_assoc($result);
    
    if($row!=null && sizeof($row)>0){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function password_is_correct($email,$senha){
    $result = do_query("select senha from jogador where email= '". $email . "' and  senha = PASSWORD('" . $senha . "')");
    
    $row = mysql_fetch_assoc($result);
    
    if($row!=null && sizeof($row)>0){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


?>