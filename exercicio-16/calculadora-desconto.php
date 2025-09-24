<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Calculadora: Desconto</title>
</head>

<body class="bg-dark text-light">
    <main class="container mt-5">
        <h1 class="text-light text-center">Calcular Desconto</h1>
        <form class="border rounded-2 border-light-subtle" action="calculadora-desconto.php" method="post">
            <div class="row flex justify-content-center m-4">
                <div class="col-2">
                    <label for="preco">Preço</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input class="form-control" type="number" step="0.01" id="preco" name="preco">
                    </div>
                </div>
            </div>
            <div class="row flex justify-content-center m-4">
                <div class="col-2">
                    <label for="desconto">Desconto</label>
                    <div class="input-group">
                        <input class="form-control" type="number" step="0.01" id="desconto" name="desconto">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
            <div class="row m-4 flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
        </form>
    </main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = $_POST["preco"];
        $desconto = $_POST["desconto"];
        $preco_final = $preco - ($preco * ($desconto / 100));

        echo '<h1 class="text-light text-center mt-3"> O preço final com desconto é R$ ' . number_format($preco_final, 2,) . '</h1>';
    }
    ?>
    <script src="../bootstrap-tut/bootstrap.min.css"></script>
</body>

</html>