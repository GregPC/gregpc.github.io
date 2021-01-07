<?php

if(isset($_POST['email']) && !empty($_POST['email']))


$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "ti2@centrodoaluminio.com.br";
$subjet = "Contato - MarketPlace";
$body = "Nome: ".$nome. "\r\n".
        "Sobrenome: ".$sobrenome. "\r\n".
        "Numero de contato: ".$telefone. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:ti2@centrodoaluminio.com.br"."\r\n"."Reply-to:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subjet,$body,$header)){
    echo "Email enviado com Sucesso!";
}else {
    echo "O Email não pode ser enviado";
}

?>