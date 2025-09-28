<div class="container mt-4">
    <h1 class="fs-4 text-center">Exercício 2 - Lista 3</h1>
    <form action="?page=exercicio-2" method="post">
        <div class="row justify-content-center">
            <div class="col-6">
                <label for="form-label" for="texto"> Texto</label>
                <input class="form-control" type="text" id="texto" name="texto" required>
            </div>
            <div class="row mt-4 mb-4 justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </div>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $texto = $_POST["texto"];
        $minusculo = strtolower($texto);
        $maiusculo = strtoupper($texto);

        echo '<h1 class="text-light text-center mt-3">Texto em minúsculo: ' . htmlspecialchars($minusculo) . '</h1>';
        echo '<h1 class="text-light text-center mt-3">Texto em minúsculo: ' . htmlspecialchars($maiusculo) . '</h1>';
    }
    ?>
</div>