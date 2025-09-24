<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Calculadora: IMC</title>
</head>

<body class="bg-dark text-light">
    <main class="container mt-5">
        <h1 class="text-light text-center">Calcular IMC</h1>
        <form class="border rounded-2 border-light-subtle" action="calculadora-imc.php" method="post">
            <div class="row flex justify-content-center m-4">
                <div class="col-2">
                    <label class="form-label" for="peso">Peso (kg)</label>
                    <input class="form-control" type="number" step="0.01" id="peso" name="peso">
                </div>
                <div class="col-2">
                    <label class="form-label" for="altura">Altura (m)</label>
                    <input class="form-control" type="number" step="0.01" id="altura" name="altura">

                </div>
                <div class="row m-4 flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25">Enviar</button>
                </div>
        </form>
    </main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $imc = $peso / ($altura * $altura);

        echo '<h1 class="text-light text-center mt-3"> Seu IMC é igual a '.$imc.'</h1>';
    }
    ?>
    <script src="../bootstrap-tut/bootstrap.min.css"></script>
</body>

</html>