<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Calcular Área</title>
</head>

<body class="bg-dark text-light">
    <main class="container mt-5">
        <h1 class="m-4 text-center">Calcular área do triângulo</h1>
        <form action="area-triangulo.php" method="post" class="border rounder-2 border-light-subtle">
            <div class="row m-4 flex justify-content-center">
                <div class="col-2 text-center">
                    <label for="tamanho-base" class="form-label">Base</label>
                    <div class="input-group">
                        <input type="number" step="0.01" id="tamanho-base" name="base" class="form-control">
                        <span class="input-group-text">metros</span>
                    </div>
                </div>

                <div class="col-2 text-center">
                    <label for="tamanho-altura" class="form-label">Altura</label>
                    <div class="input-group">
                        <input type="number" step="0.01" id="tamanho-altura" name="altura" class="form-control">
                        <span class="input-group-text">metros</span>
                    </div>
                </div>
            </div>

            <div class="row m-4 flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST["base"];
            $altura = $_POST["altura"];

            $area = $base * $altura;

            echo '<h1 class="text-light text-center mt-3">Área = '.number_format($area, 2).'m²</h1>';
        }
        ?>
    </main>

    <script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>

</html>