<div class="containter mt-4">
    <h1 class="fs-4 text-center">Contar caracteres</h1>
    <form action="?page=exercicio-1" method="POST">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="form-label" for="texto"> Palavra</label>
                <input class="form-control" type="text" id="texto" name="texto" required>
            </div>
            <div class="row mt-4 mb-4 justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texto = $_POST["texto"];
            $tamanho = strlen($texto);
            echo '<h1 class="text-light text-center mt-3">A palavra  tem ' . $tamanho . ' caracteres.</h1>';
        }
        ?>
</div>