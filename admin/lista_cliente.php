<h2>Lista de mensagens</h2>
<?php

    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM cliente");

    while($tabela = mysqli_fetch_array($sql)){
        echo "Nome: $tabela[nome] <br>";
        echo "E-mail: $tabela[email] <br>";
        echo "<a href=?pg=excluir_cliente&id=$tabela[id]><b>X</b></a>";
        echo "<hr>";
    }

    if(!$sql){
        echo "Não foi possível ler as mensagens.";
    }

    mysqli_close($conexao);