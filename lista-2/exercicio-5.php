<div class="container mt-3">
    <h1 class="text-center fs-2"> Exercício 5 - Lista 2</h1>
    <form action="?page=exercicio-5" method="post">
        <div class="row flex justify-content-center m-4">
            <div class="col-2">
                <label class="form-label" for="numero">Número</label>
                <input class="form-control" type="number" step="0.01" id="numero" name="numero">
            </div>
            <div class="row m-4 flex justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    switch ($numero) {
        case 1:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Janeiro</h1>';
            break;
        case 2:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Fevereiro</h1>';
            break;
        case 3:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Março</h1>';
            break;
        case 4:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Abril</h1>';
            break;
        case 5:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Maio</h1>';
            break;
        case 6:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Junho</h1>';
            break;
        case 7:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Julho</h1>';
            break;
        case 8:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Agosto</h1>';
            break;
        case 9:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Setembro</h1>';
            break;
        case 10:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Outubro</h1>';
            break;
        case 11:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Novembro</h1>';
            break;
        case 12:
            echo '<h1 class="text-light text-center mt-3">' . $numero . ' - Dezembro</h1>';
            break;
        default:
            echo '<h1 class="text-danger text-center mt-3">Número inválido</h1>';
            break;
    }
}

?>