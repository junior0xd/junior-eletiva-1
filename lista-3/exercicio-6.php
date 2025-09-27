<div class="container">
    <h1 class="fs-3 text-center">Exercício 6 - Lista 3</h1>
    <h2 class="fs-5 text-center">Arredondar Número</h2>
    <div class="row flex justify-content-center m-4">
        <form action="?page=exercicio-6" method="post">
            <div class="row flex justify-content-center">
                <div class="col-2">
                    <label class="form-label" for="numero">Número</label>
                    <input class="form-control" type="number" step="0.01" id="numero" name="numero">
                </div>
            </div>
            <div class="row m-4 flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </form>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo '<h1 class="text-light text-center mt-3">' . round($numero) . '</h1>';
}

?>