<div class="container mt-4">
    <h1 class="fs-3 text-center w-100">Exercício 3 - Lista 2</h1>
    <form action="?page=exercicio-3" method="post">
        <div class="row justify-content-center mt-2">
            <div class="col-2">
                <label for="form-label" for="numero1"> Número 1</label>
                <input class="form-control" type="number" id="numero1" name="numero1" required>
            </div>
            <div class="col-2">
                <label for="form-label" for="numero2"> Número 2</label>
                <input class="form-control" type="number" id="numero2" name="numero2" required>
            </div>
            <div class="row mt-4 mb-4 justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
    </form>
    <?php
    //Mostrar em ordem crescente
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if ($numero1 < $numero2) {
            echo '<h1 class="text-light text-center mt-3">' . htmlspecialchars($numero1) . ', ' . htmlspecialchars($numero2) . '</h1>';
        }
        if ($numero1 == $numero2) {
            echo '<h1 class="text-light text-center mt-3">Os números são iguais: ' . htmlspecialchars($numero1) . '</h1>';
        } else {
            echo '<h1 class="text-light text-center mt-3">' . htmlspecialchars($numero2) . ', ' . htmlspecialchars($numero1) . '</h1>';
        }
    }
    ?>
</div>