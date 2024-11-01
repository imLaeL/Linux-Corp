<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $assunto = $_REQUEST['assunto'];
    $mensagem = $_REQUEST['mensagem'];

    $sql = "INSERT INTO contatos 
            (nome,email,assunto,mensagem) VALUES
            ('$nome','$email','$assunto','$mensagem')
            ";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo '<h3 class="text-center"> Mensagem enviada com sucesso.</h3>';
    }else{
        echo '<h3 class="text-center"> Erro ao enviar mensagem.</h3>';
    }

    mysqli_close($conexao);

?>