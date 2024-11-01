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

        img {
            border-radius: 20px 20px 20px 20px;
        }
    </style>
</head>
<body>

<?php

    include_once("templates/topo.php");
    include_once("templates/menu.php");

    if(empty($_SERVER["QUERY_STRING"])) {
        $var = "principal.php";
        include_once("$var");
    } else {
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once("templates/rodape.php")

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>