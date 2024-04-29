<?php
    session_start();
    include("conexao.php");
    $conn = conectar();
  

    if(empty($_POST["email"]) || empty($_POST["senha"])) {
        header("Location: ../pages/login.php");
        exit();
    }

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $query = $conn->prepare("SELECT id FROM usuarios WHERE email=:e and senha=:s");

    $query->bindValue(":e", $email);
    $query->bindValue(":s", $senha);
    $query->execute();

    $row = $query->rowCount();

    if($row == 1) {
        $_SESSION['logado']=$email;
        header('Location: ../index.php'); 
        exit();
    } else {
        $_SESSION['nao_logado']=true;
        header('Location: ../pages/login.php');
        exit();
    }
?>