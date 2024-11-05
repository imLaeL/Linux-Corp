<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="custom-card text-center">
                <h2 class="mb-3">Olá cliente</h2>
                <p class="text-muted">Sinta-se a vontade</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam soluta vitae earum debitis corporis, exercitationem minima corrupti eveniet nihil quidem nulla sit nemo facere iusto pariatur quo mollitia cupiditate nobis.</p>
                
                <form action="?pg=cadastra_cliente" method="POST">
                    Nome: <input type="text" name="nome"> <br>
                    E-mail: <input type="text" name="email"> <br>
                    <input type="submit" value="Enviar">
                </form>

            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>