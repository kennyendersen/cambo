<?php
 /*    include("conexao.php");
    $conn = conectar(); */

    /* Armazenando os dados */
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $data_envio = date('d/m/y');
    $hora_envio = date('H:i:s');


    /* Mensagem que ira chegar no email */
    $arquivo = 
    "<html>
        <p><strong>Nome: </strong>$nome</p>
        <p><strong>E-mail: </strong>$email</p>
        <p><strong>Sugestão: </strong>$msg</p>
        <p><strong>Este e-mail foi enviado em </strong>$data_envio<strong> às $hora_envio</strong></p>
    </html>";

    /* Email de destino */
    $destino = "kennyfreitas00@gmail.com";
    $assunto = "Sugestão para o site";

    /* Este campo sempre devera existir para exibir os caracteres corretamente */
    $headers = "MIME-Version 1.0\n";
    $headers = "Content-type: text/html; charset=iso-8859-1\n";
    $headers = "From: $nome <$email>";

    /* Enviar email */
    mail($destino, $assunto, $arquivo, $headers);

    echo "<meta http-equiv='refresh' content=;10;URL=../index.php";

?>