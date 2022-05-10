<?php

if (isset($_POST(['email']) && !empty ($_POST(['email'])) {
    
    $nome = addcslashes ($_POST['nome']);
    $email = addcslashes ($_POST['email']);
    $mensagem = addcslashes ($_POST['mensagem']);

    $to = "nieltri78@gmail.com";
    $subject = "Contato - Programador DEV.Obe";
    $body = "Nome: ".$nome. "\r\n".
            "E-mail: ".$email. "\r\n".
            "Mensagem: ".$mensagem;

    $header = "From:dev.obe78@gmail.com"."\r\n"."Reply-to: ".$email."\r\n"."X=Mailer:PHP/".phpversion();          

    if (mail($to, $subject, $body, $header)) {

        echo("E-mail enviado com sucesso");

    } else {

        echo ("O e-mail não pode ser enviado");
    }


}

?>