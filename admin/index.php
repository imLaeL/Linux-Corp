<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Fale Conosco</title>
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
    </style>
</head>

<h1>Painel Admin</h1>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarText">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Página inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pg=lista_msg">Lista de Mensagens</a>
                </li>
                </span>
        </div>
    </div>
</nav>

<body>
<?php

    if (empty($_SERVER['QUERY_STRING'])) {
        $var = "conteudo.php";
        include_once($var);
    } else {
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>