<h2>Lista de Clientes</h2>
<?php

    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM cliente");

    echo "<a href=?pg=form_clientes> Cadastrar Novo </a>";
    echo "<h2>Clientes</h2>";

    while($cliente = mysqli_fetch_array($sql)){
        echo "Nome: $cliente[nome] <br>";
        echo "E-mail: $cliente[email] <br>";
        echo "<a href=?pg=excluir_cliente&id=$cliente[id]><b>Remover Cliente</b></a>";
        echo "<a href=?pg=form_altera_clientes&id=$cliente[id]><b>Alterar Cliente</b></a>";
        echo "<hr>";
    }

    if(!$sql){
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_close($conexao);