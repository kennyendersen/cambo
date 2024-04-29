<?php
    session_start();
    
    //1-Realizando a conexão com o Banco de Dados
    include("conexao.php");
    $conn=conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar registros</title>
</head>
<body>
    <div style="width:100%;">
        <h1 style="float: left;">Listar Registros</h1>
        <h1 style="float: right;"><a href="../pages/cadastro.php">Cadastrar</a></h1>
    </div>

    <!--<hr style="width:100%;">-->
    <br>

    <?php
    /* -------------PAGINAÇÃO - PARTE_1 - INÍCIO ------------------*/
       //1 - Criando uma variável para informar a página atual usando GET
       // http://localhost/projetoacademico/listar2.php?page=1 

       //2- Criar uma variável para receber o número da página atual da URL
       $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);

       //3- Verificar se a numeração não foi enviada através da URL
       $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

       //4- Setar a quantidade de registros por página
       $limite_result = 50;

       //5- Calcular o início da visualização(precisamos identificar a partir de qual registro irá iniciar a próxima página)
       $inicio = ($limite_result * $pagina) - $limite_result;

    /* -------------PAGINAÇÃO - PARTE_1 - FIM ------------------*/



        //2-Preparando a consulta de registro de usuários
        $query_usuarios = $conn->prepare("SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT $inicio, $limite_result");

        //3-Executando a consulta
        $query_usuarios->execute();
    ?>
    <!--Criando o formulário para excluir mais de um registro-->
    <form name="delusuarios" method="POST" action="excluirusuarios.php">

        <!--Criando uma Tabela para organizar os registros-->
        <br>
    
        <table style="width: 100%; margin: 15px auto;">
            <thead>
                <tr><!--Primeira linha da tabela-->
                    <th style="background-color: #E6E6FA; padding: 10px;">Item</th>
                    <th style="background-color: #E6E6FA; padding: 10px;">ID</th>
                    <th style="background-color: #E6E6FA; padding: 10px;">Nome</th>
                    <th style="background-color: #E6E6FA; padding: 10px;">E-mail</th>
                    <th style="background-color: #E6E6FA; padding: 10px;">Ações</th>
                </tr>
            </thead>
    

    <?php
    //4-Verificando se encontrou registros no Banco de Dados
    if($query_usuarios->rowCount() != 0){

        //5-Transformando em um Array Associativo e Percorrendo com While
        while($rowusuarios = $query_usuarios->fetch(PDO::FETCH_ASSOC)){
            echo "<tr align=center>"; //Criando a 2ª linha da tabela
                extract($rowusuarios);
                echo "<td><input type='checkbox' name='id[$id]'> </td>";
                echo "<td>" . $id . "</td>";
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $email . "</td>";
                echo "<td><a href='editar.php?id=$id'>[Editar]</a> <a href='confirmarexcluir.php?id=$id'>[Excluir]</a> </td>";
            echo "</tr>";
        }
    ?>
        <!--Encerrar a tabela-->
        </table>
        <br>
        <input type="submit" value="Excluir usuários selecionados" name="delusuarios">
    </form><!--Encerrando o formulário-->
    <br>
    <br>

    <?php
    /* -------------PAGINAÇÃO - PARTE_2 - INÍCIO ------------------*/
    //6- Contar a quantidade de registros no banco de dados
    $query_qnt_registros = $conn->prepare("SELECT COUNT(id) AS num_result FROM usuarios");
    $query_qnt_registros->execute();

    $row_qnt_registros = $query_qnt_registros->fetch(PDO::FETCH_ASSOC);

    //7-Identificar a quantidade de páginas para exibir todos os registros (CEIL)
    $qnt_pagina = ceil($row_qnt_registros['num_result'] / $limite_result);

    //8- Criar uma variável para informar o máximo de links na página
    $maximo_link = 2;

    //9- Mostrar o link da primeira página
    echo "<a href='usuarios.php?page=1'>&#171;</a> ";

    //10- Listar os links anteriores da página atual (FOR)
    for($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina-1; $pagina_anterior++){
        
        if($pagina_anterior >= 1){
            echo "<a href='usuarios.php?page=$pagina_anterior'>$pagina_anterior</a> ";
        }
    }

    //11- Mostrar a página atual
    echo "$pagina ";

    //12- Listar os links posteriores a página atual (FOR)
    for($pagina_posterior = $pagina + 1; $pagina_posterior <= $pagina + $maximo_link; $pagina_posterior++){
        
        if($pagina_posterior <= $qnt_pagina){
            echo "<a href='usuarios.php?page=$pagina_posterior'>$pagina_posterior</a> ";
        }
    }

    //Link da última página
    echo "<a href='usuarios.php?page=$qnt_pagina'>&#187;</a> ";



    /* -------------PAGINAÇÃO - PARTE_2 - FIM ------------------*/   


    }else{
        echo "<p style='color:red;'>Erro: Usuário não encontrado</p>";
    }

    ?>
    
</body>
</html>