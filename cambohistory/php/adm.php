<?php
    session_start();  //Iniciando uma sessão

    //Chamando um script para verificar a existencia de uma sessão
    include("verificalogin.php");

?>

     <div align="center"><br><br>
        <h1>Painel do Administrador</h1>
    </div>
    <div align="center">
        <h2>Olá, <?php echo $_SESSION['logado']; ?> </h2>
    </div>
    
    <!--Link para encerrar a sessão do usuário-->
    <nav align="center">
        <!--Link para listar usuário-->
        <h3><a href="usuarios.php">Listar usuários</a></h3>
    
        <!--Link para encerrar a sessão do usuário-->
        <h3><a href="scriptlogout.php">Logout</a></h3>
    </nav>