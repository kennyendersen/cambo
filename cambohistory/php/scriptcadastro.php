<?php
    session_start();
    include("conexao.php");
    $conn = conectar();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $cosenha = md5($_POST['cosenha']);

    if(empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["senha"]) || empty($_POST["cosenha"])) {
        header("Location: cadastro.php");
        exit();
    }

    $cadastro = $conn->prepare("INSERT INTO usuarios(nome, email, senha, cosenha) VALUES(:nome, :email, :senha, :cosenha)");

    $cadastro->bindValue(":nome", $nome);
    $cadastro->bindValue(":email", $email);
    $cadastro->bindValue(":senha", $senha);
    $cadastro->bindValue(":cosenha", $cosenha);

    $verificar=$conn->prepare("SELECT *FROM usuarios WHERE email=?");
    $verificar->execute(array($email));


    if($verificar->rowCount()==0 && $senha == $cosenha) {
        $cadastro->execute();
        $_SESSION['user_login']=$email;
        header("Location: ../pages/login.php");
        exit();
        /* echo "Usuario Cadastrado com sucesso!"; */

    } else {
        $_SESSION['not_cad']=true;
        header("Location: ../pages/cadastro.php");
        exit();
    }
?>