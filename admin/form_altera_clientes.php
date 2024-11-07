<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clientes</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .footer {
            padding: 20px 0;
            margin-top: auto;
        }

        h1 {
            margin-left: 5%;
        }

        img {
            border-radius: 20px 20px 20px 20px;
        }
    </style>
</head>

<body>

    <?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include_once("../config.inc.php");

    $sql = "SELECT * FROM cliente 
        WHERE id = $_REQUEST[id]";

    $query = mysqli_query($conexao, $sql);


    while ($cliente = mysqli_fetch_array($query)) {

        ?>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="custom-card text-center">
                        <h2 class="mb-3">Olá cliente</h2>
                        <p class="text-muted">Sinta-se a vontade</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam soluta vitae earum debitis
                            corporis, exercitationem minima corrupti eveniet nihil quidem nulla sit nemo facere iusto
                            pariatur quo mollitia cupiditate nobis.</p>

                        <form action="?pg=altera_cliente" method="POST">
                            <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
                            Nome: <input type="text" name="nome" value="<?= $cliente['nome'] ?>"> <br>
                            E-mail: <input type="text" name="email" value="<?= $cliente['email'] ?>"> <br>
                            <input type="submit" value="Enviar">
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?php

    }

    ?>