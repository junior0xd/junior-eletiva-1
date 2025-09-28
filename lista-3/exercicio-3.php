<div class="container mt-4">
    <h1 class="fs-4 text-center">Exercício 3 - Lista 3</h1>
    <form action="?page=exercicio-3" method="POST">
        <div class="row justify-content-center">
            <div class="col-6">
                <label for="form-label" for="texto"> Texto</label>
                <input class="form-control" type="text" id="texto" name="texto" required>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <label for="form-label" for="palavra"> Palavra</label>
                <input class="form-control" type="text" id="palavra" name="palavra" required>
            </div>
        </div>
        <div class="row mt-4 mb-4 justify-content-center">
            <button type="submit" class="btn btn-primary w-25">Enviar</button>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];
        $palavra = $_POST["palavra"];
        $palavras = explode(" ", $texto);
        $encontrado = in_array($palavra, $palavras);
        if ($encontrado) {
            echo '<h1 class="text-light text-center mt-3">A palavra "' . htmlspecialchars($palavra) . '" foi encontrada no texto.</h1>';
        } else {
            echo '<h1 class="text-light text-center mt-3">A palavra "' . htmlspecialchars($palavra) . '" não foi encontrada no texto.</h1>';
        }
    }
    ?>
</div>