<?php
require_once 'interface_conexao.php';

$php_info = file_get_contents('php://input');
$email = explode("=", $php_info);
 
if(array_key_exists(1,$email) && email_is_correct($email[1])){
    echo "email_is_registered";
}else{
    echo "email_is_not_registered";
}

?>