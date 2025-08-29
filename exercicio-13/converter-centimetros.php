<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Conversor</title>
</head>

<body class="bg-dark text-light">
    <main class="container mt-5">
        <h1 class="text-light text-center">Converter metros em</h1>
        <form class="border rounded-2 border-light-subtle" action="calcular-expoente.php" method="post">
            <div class="row flex justify-content-center m-4">
                <div class="col-2">
                    <label class="form-label" for="base">Base</label>
                    <input class="form-control" type="number" step="0.01" id="base" name="base">
                </div>
                <div class="col-2">
                    <label class="form-label" for="expoente">Expoente</label>
                    <input class="form-control" type="number" step="0.01" id="expoente" name="expoente">
                </div>
                <div class="row m-4 flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25">Enviar</button>
                </div>
        </form>
    </main>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST["base"];
            $expoente = $_POST["expoente"];

            $resultado = $base ** $expoente;

            echo '<h1 class="text-light text-center mt-3">O resultado é igual a ' . $resultado . '</h1>';
        }
        ?>
    <script src="../bootstrap-tut/bootstrap.min.css"></script>
</body>

</html>