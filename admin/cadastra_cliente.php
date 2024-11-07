<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    include_once("../config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];

    $sql = "INSERT INTO cliente 
            (nome,email) VALUES
            ('$nome','$email')
            ";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo '<h3 class="text-center"> Cliente cadastrado com sucesso.</h3>';
    }else{
        echo '<h3 class="text-center"> Erro ao cadastrar cliente.</h3>';
    }

    mysqli_close($conexao);

?>