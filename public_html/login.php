<?php
require_once 'interface_conexao.php';

$email = $_POST["username"];
$password = $_POST["password"];

if(!email_is_correct($email)){
    echo "Email incorreto! <br/>";
    exit();
}
    
if(!password_is_correct($email,$password)){
     echo "Senha incorreta! <br/>";
     exit();
}

header ("Location: http://localhost/soccerWeb/public_html/pagina-principal.html");
exit;

?>