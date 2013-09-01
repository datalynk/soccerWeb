<?php
include_once 'conexao.php';

const USER = 'root';
const PASSWORD = 'senha';
const IP = 'localhost';
const DATABASE = 'sgbi';
$db = new ConexaoMYSQL(USER,PASSWORD,IP);

function do_query($query){
    $db->connect();
    $db->select_database(DATABASE);
    $result = $db->execute($query);
    $db->disconnect();
    
    return $result;
}

function email_is_correct($email){
    $result = do_query("select email from jogador where email = '" . $email . "'");
    if($result != false) $result = true;
    return $result;
}

function password_is_correct($senha){
    $result = do_query("select senha from jogador where senha = 'PASSWORD(" . $senha . ")'");
    if($result != false) $result = true;
    return $result;
}


?>