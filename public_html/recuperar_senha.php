<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="pt-br" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>FutOnline</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <script src="js/libs/jquery-1.9.0/jquery-1.10.2.js"></script>
        <script src="js/jquery.tipsy.js"></script>
        <link rel="stylesheet" type="text/css" href="css/tipsy.css" />

        <script src="js/utils.js"></script>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        
         <?php
            $php_info = file_get_contents('php://input');
            $email = explode("=", $php_info);
        ?>
        
        <script>
             $(function() {
                $('#email').val('<?php echo urldecode($email[1]) ?>');
             });
        </script>
        
        <style>
            #wrapper{
                width: 60%;
                right: 0px;
                min-height: 500px;	
                margin: 0px auto;	
                width: 500px;
                position: relative;
                float:none;
            }
            .container{
                padding-top: 50px;
            }
            
            #submit_login{
                font-size:24px;
                width: 40%;
            }
            
            #login{
                padding:18px 6% 30px 6%;;
            }
            
            body{ 
                background-image: url(images/recuperar-senha.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: 50% 50%;
            }
        </style>
        
     </head>
    <body>
        
        <div class="container">

            <section>				
                <div id="container_demo" >
                    
                    <div id="wrapper">
                         <div id="login" class="animate">
   
                                <h1>Recuperação de senha</h1> 
                                <p>
                                    Sua senha será enviada para o email usado para fazer login.
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Escreva o seu email </label>
                                    <input id="email" name="username" required="required" type="text" placeholder="meu_email@mail.com"/>
                                </p>
                                
                                <p> 
                                    <input id="submit_login" class="login button" type="submit" onclick="enviarEmail($('#email').val());" value="Recuperar senha" />  
                                </p>
                                    
                      
                        </div>   
                </div>  
                
                
            </section>
        </div>

    </body>
</html>
