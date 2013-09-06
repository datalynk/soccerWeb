<?php
require_once 'phpmailer/class.phpmailer.php';
require_once 'interface_conexao.php';

$php_info = file_get_contents('php://input');
$email = explode("=", $php_info);
//$email = array('email','wly.hid@gmail.com');

function sendEmail($emailReceiver){

    $senha = getSenha($emailReceiver);
    if($senha){
    
        $mail = new PHPMailer();
        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->Host = "ssl://smtp.gmail.com"; // Endereço do servidor SMTP
        $mail->Port = '465';
        $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
        $mail->Username = 'soccerwebadm@gmail.com'; // Usuário do servidor SMTP
        $mail->Password = 'senhaadm'; // Senha do servidor SMTP

        // Define o remetente
        $mail->From = "soccerwebadm@gmail.com"; // Seu e-mail
        $mail->FromName = "soccerWebAdm"; // Seu nome
        // Define os destinatário(s)
        $mail->AddAddress($emailReceiver);

        $mail->IsHTML(true);

        $mail->Subject  = "Senha do site SoccerWeb"; // Assunto da mensagem
        $mail->Body = 
                "Caro usuário,<br/><br/>" .
                "Você solicitou a recuperação de sua senha no site soccerWeb. <br/>" .   
                "Sua senha é: " . $senha . "<br/><br/>" .
                "Estamos à sua disposição,<br/><br/>" .
                "soccerWeb (Email enviado automaticamente - NÃO RESPONDER ESTE EMAIL)";
                
                //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

        $enviado = $mail->Send();

        // Limpa os destinatários e os anexos
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
        
        $result = "";
        // Exibe uma mensagem de resultado
        if ($enviado) {
            $result = "email_was_sent";
        } else {
            $result = "e-mail_was_not_sent.<br /><br />" .
                      "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
        }
    }else{
        $result = "password_not_found";
    }
    return $result;
}

if(array_key_exists(1,$email) && email_is_correct($email[1])){
    echo sendEmail($email[1]);
}else{
    echo "email_is_not_registered";
}

?>