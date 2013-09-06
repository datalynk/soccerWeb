<?php
require_once 'interface_conexao.php';

$php_info = file_get_contents('php://input');
$contents = explode(";", $php_info);
$email = explode("=", $contents[0]);
$password = explode("=", $contents[1]);
 
if(!array_key_exists(1,$email)){
    echo "email_is_not_registered";
}

if(!array_key_exists(1,$password)){
    echo "password_is_not_registered";
}

if(password_is_correct($email[1],$password[1])){
    echo "password_is_registered";
}else{
    echo "password_is_not_registered";
}

?>