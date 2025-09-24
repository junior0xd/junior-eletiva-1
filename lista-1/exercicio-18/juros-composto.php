<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Juros Compostos</title>
</head>

<body class="bg-dark text-light">
    <main class="container mt-5">
        <h1 class="text-center m-4">Calcular juros compostos</h1>
        <form class="border rounded-2 border-light-subtle" action="juros-composto.php" method="post">
            <div class="row flex justify-content-center">
                <div class="col-2 text-center">
                    <label for="capital">Valor</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input class="form-control" type="number" step="0.01" id="capital" name="capital">
                    </div>
                </div>
                <div class="col-2 text-center">
                    <label for="taxa">Taxa</label>
                    <div class="input-group">
                        <input class="form-control" type="number" step="0.01" id="taxa" name="taxa" min="0.01" max="100">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <label for="periodo">Periodo</label>
                    <div class="input-group">
                        <input class="form-control" type="number" id="periodo" name="periodo">
                        <span class="input-group-text">dias</span>
                    </div>
                </div>
                <div class="row m-4 flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25">Enviar</button>
                </div>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $capital = $_POST["capital"];
            $taxa = $_POST["taxa"] / 100;
            $periodo = $_POST["periodo"];

            $juros = $capital * (1 + $taxa) ** $periodo;

            echo '<h1 class="text-light text-center">O valor final do empréstimo será de R$' . number_format($juros, 2) . '</h1>';
        }
        ?>
    </main>
</body>
<script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>

</html>