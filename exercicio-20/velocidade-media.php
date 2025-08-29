<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Velocidade Média</title>
</head>

<body class="bg-dark text-light">
    <main class="container mt-5">
        <h1 class="text-center text-light">Calcular a velocidade média</h1>
        <form class="border rounded-2 border-light-subtle" action="velocidade-media.php" method="post">
            <div class="row flex justify-content-center m-4">
                <div class="col-2">
                    <label for="distancia">Distância</label>
                    <div class="input-group">
                        <input class="form-control" type="number" step="0.01" id="distancia" name="distancia">
                        <span class="input-group-text">km</span>
                    </div>
                </div>
                <div class="col-2">
                    <label for="tempo">Tempo</label>
                    <div class="input-group">
                        <input class="form-control" type="number" step="0.01" id="tempo" name="tempo">
                        <span class="input-group-text">horas</span>
                    </div>
                </div>
            </div>
            <div class="row m-4 flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tempo = $_POST["tempo"];
            $distancia = $_POST["distancia"];

            $velocidade = $distancia / $tempo;

            echo '<h1 class="text-light text-center">A velocidade média é igual a ' . number_format($velocidade, 2) . ' km/h</h1>';
        }
        ?>
    </main>
    <script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>

</html>