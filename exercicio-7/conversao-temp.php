<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Conversão de Temperatura</title>
</head>

<body class="bg-dark text-light">
    <main class="container m-4">
    <form action="conversao-temp.php" method="post" class="row justify-content-center">
        <h1 class="mb-5">Converter Temperatura</h1>
        <div class="col-12">
            <div class="input-group mb-3 w-25">
                <input name="temperatura" type="number" step="0.01" class="form-control" placeholder="T" aria-label="Temperatura" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1">°F</span>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-primary col-1">Enviar</button>
        </div>
        
    </form>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $t_fahrenheit = $_POST["temperatura"];
        $celsius = ($t_fahrenheit - 32 ) / 1.8;

        echo '<h1 class="text-light mt-4"> A temperatura em celsius é '.number_format($celsius, 1).'</h1>';
    }
    
    ?>
    </main>
    <script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>

</html>