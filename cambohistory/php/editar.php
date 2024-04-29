<?php
    session_start();
    ob_start(); //Limpando o Buffer de saida no redirecionamento

    //1- Conexão com o Banco de Dados
    include("conexao.php");
    $conn = conectar();

    //2 - Receber o id do usuário através da URL, utilizando o método GET
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    //3 - Verificar se a variável ID não está vazia. (empty)
    if(empty($id)){
        $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Usuário não encontrado</p>";
        header("Location: listar2.php");
    }

    //4 - Caso  o $id não esteja vazio, pesquisar pelo usuário no banco de dados.
    $query_usuario = "SELECT id, nome, email FROM usuarios WHERE id=$id LIMIT 1";

    //5 - Preparando a query
    $result_usuario = $conn->prepare($query_usuario);

    //6 - Executando a consulta
    $result_usuario->execute();

    //7- Verificar se encontrou usuários no Banco
    if(($result_usuario) and ($result_usuario->rowCount() !=0)){

        //Armazenar os dados em um Array Associativo
        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

    }else{
        $_SESSION['msg'] = "<p style='color:#f00;'>Erro: Usuário não encontrado</p>";
        header("Location: usuarios.php");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de registros</title>

    <style>
        .edicao{
            width:100%;
            max-width: 450px;
            margin: 10px auto;
            background-color: green;
            padding: 20px;
            border-radius: 5px;
            margin-top: 10px;
            font-family: Arial; 
            text-align: center;
        }

        input{
            width: 65%;
            padding: 10px 5px;
            border-radius: 5px;
            outline-color: #cdf;
        }

        label{
            font-weight: bold;
        }

        .atualizar{
            text-align: center;
            outline-color: #cdf;
            padding-left: 30px;
        }

        header{
            text-align:center;
            padding-bottom: 20px;
            padding-top: 20px;
        }

    </style>
</head>
<body>
<?php
    //8- Receber dados do formulário através do metodo POST e armazenar em um array
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //9- Verificar se o usuário clicou no botão "Atualizar"
    if(!empty($dados['EditUsuario'])){

        //Validação de input não nulo
        $empty_input = false;

        //Retirar espaços em branco no início e no final
        array_map('trim', $dados);

        //10- Verificar se há compos em branco
        if(in_array("", $dados)){

            $empty_input = true;
            echo "<p style='color: #f00; text-align: center;'> Erro: Necessário preencher todos os campos!</p>";
         
        //11- Verificar se a estrutura do e-mail é válida   
        }elseif(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
            $empty_input=true;
            echo "<p style='color: #f00;'> Erro: Necessário preencher com e-mail válido!</p>";

        }

        //12- Verificar se não há erros. Se verdadeiro atualizar o banco de dados
        if(!$empty_input){

            //Implementando o UPDATE  no Banco de Dados
            $query_up_usuario = "UPDATE usuarios SET  nome=:nome, email=:email WHERE id=:id";

            //Preparando a query
            $edit_usuario = $conn->prepare($query_up_usuario);

            //13- Passando os valores do vetor de $dados para os pseudo-nomes
            $edit_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $edit_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $edit_usuario->bindParam(':id', $id, PDO::PARAM_INT);

            //14- Verificar se a execução da query foi realizada com sucesso!
            if($edit_usuario->execute()){
                $_SESSION['msg'] = "<p style='color: green; text-align: center;'>Usuário atualizado com sucesso!</p>";
                header("Location: usuarios.php");
            }else{
                echo "<p style='color: #f00;'>Usuário não atualizado!</p>";
            }
        }

    }

?>
    <header>
        <h1>Editor de Registro</h1>
    </header>

    <!--Criando o formulário para edição de registros-->
    <div class="edicao">
        <form action="" method="POST">
            
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" value="<?php 
                //Verificar se veio dados do usuario pelo formulário. Se verdadeiro, manter os dados
                if(isset($dados['nome'])){
                    echo $dados['nome'];

                //Mostrar os dados que veio do banco de dados
                }elseif(isset($row_usuario['nome'])){
                    echo $row_usuario['nome'];

                }
            ?>" width="90%"><br><br>

            <label>E-mail: </label>
            <input type="email" name="email" id="email" placeholder="Digite o melhor e-mail" value="<?php 
                //Verificar se veio dados do usuario pelo formulário. Se verdadeiro, manter os dados
                if(isset($dados['email'])){
                    echo $dados['email'];

                //Mostrar os dados que veio do banco de dados
                }elseif(isset($row_usuario['email'])){
                    echo $row_usuario['email'];

                }
            ?>" width="90%"><br><br>

            <div class="atualizar">
                <input type="submit" value="Atualizar" name="EditUsuario">
            </div>
        </form>
    </div>
    <!--Fim do formulário-->
    
</body>
</html>