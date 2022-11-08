<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "brunoleonn123@gmail.com";
    $subject = "Contato - Desenvolvedor Bruno";
    $body = "Nome: " . $nome . "/r/n" .
        "Email: " . $email . "/r/n" .
        "Mensagem: " . $mensagem .
        $header = "From:suporte@grupozaibatsu.com.br" . "/r/n" .
        "Reply-to:" . $email . "/e/n" .
        "X=Mailer:PHP/" . phpversion();
    if (mail($to, $subject, $body, $header)) {

        echo ("Email enviado com sucesso!");

    } else {
        echo ("Email não pode ser enviado!");
    }

}



?>