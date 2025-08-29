<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Converter Tempo</title>
</head>

<body class="bg-dark text-light">
    <main class="container mt-5">
        <h1 class="text-light text-center">Converter tempo</h1>
        <form class="border rounded-2 border-light-subtle" action="converter-tempo.php" method="post">
            <div class="flex row justify-content-center">
                <div class="col-2 text-center">
                    <label for="dias"></label>
                    <div class="input-group">
                        <input class="form-control" type="number" name="dias" id="dias" min="1" >
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
            $dias = $_POST["dias"];

            $horas = $dias * 24;
            $minutos = $horas * 60;
            $segundos = $minutos * 60;

            if ($dias > 1) {
                echo '<p class="text-center text-light">' . $dias . ' dias é igual a</p>';
                echo '<ul class="text-center text-light" type="none">
                <li>' . $horas . ' horas ou</li>
                <li>' . $minutos . ' minutos ou</li>
                <li>' . $segundos . ' segundos.</li>
                </ul>';
            } else {
                echo '<p class="text-center text-light">' . $dias . ' dia é igual a</p>';
                echo '<ul class="text-center text-light" type="none">
                <li>' . $horas . ' horas ou</li>
                <li>' . $minutos . ' minutos ou</li>
                <li>' . $segundos . ' segundos.</li>
                </ul>';
            }
        }
        ?>
    </main>

    <script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>

</html>