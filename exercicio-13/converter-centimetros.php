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
        <h1 class="text-light text-center">Converter metros em centímetros</h1>
        <form class="border rounded-2 border-light-subtle" action="converter-centimetros.php" method="post">
            <div class="row flex justify-content-center m-4">
                <div class="col-2">
                    <label class="form-label" for="metros">Metros</label>
                    <input class="form-control" type="number" step="0.01" id="metros" name="metros">
                </div>
                <div class="row m-4 flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25">Enviar</button>
                </div>
        </form>
    </main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $metros = $_POST["metros"];

        $centimetros = $metros * 100;

        echo '<h1 class="text-light text-center mt-3">' . $metros . ' metros é igual a ' . $centimetros . ' centímetros</h1>';
    }
    ?>
    <script src="../bootstrap-tut/bootstrap.min.css"></script>
</body>

</html>