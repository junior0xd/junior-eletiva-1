<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Perímetro do círculo</title>
</head>
<body class="bg-dark text-light">
    <main class="container mt-5">
        <h1 class="m-4 text-center">Perímetro do círculo</h1>
        <form class="border rounded-2 border-light-subtle" action="perimetro-circulo.php" method="post">
            <div class="row flex justify-content-center">
                <div class="col-4 text-center">
                    <label for="raio">Raio</label>
                    <div class="input-group">
                        <input class="form-control" type="number" step="0.01" id="raio" name="raio">
                        <span class="input-group-text">m</span>
                    </div>
                </div>
            </div>
            <div class="row m-4 flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $raio = $_POST["raio"];
            $perimetro_circulo = pi() * $raio *  2;

            echo '<h1 class="text-ligt text-center mt-3">O perímetro do círculo é igual a '.number_format($perimetro_circulo, 2).'m</h1>';
        }
        
        ?>
    </main>
    <script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>
</html>