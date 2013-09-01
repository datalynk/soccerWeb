<?php
include_once 'interface_conexao';

$email = $_POST["username"];
$password = $_POST["password"];

echo $email . '<br/>';
echo $password;

if(email_is_correct($email) && password_is_correct($password)){
    header ("location: /soccerWeb/pagina-principal.html");
}
   

?>