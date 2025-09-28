<div class="container mt-4">
    <h1 class="fs-3 text-center w-100">Exercício 1 - Lista 2</h1>
    <form action="?page=exercicio-1" method="post">
        <div class="row justify-content-center mt-2">
            <div class="col-2">
                <label for="form-label" for="numero1"> Número 1</label>
                <input class="form-control" type="number" id="numero1" name="numero1" required>
            </div>
            <div class="col-2">
                <label for="form-label" for="numero2"> Número 2</label>
                <input class="form-control" type="number" id="numero2" name="numero2" required>
            </div>
            <div class="col-2">
                <label for="form-label" for="numero3"> Número 3</label>
                <input class="form-control" type="number" id="numero3" name="numero3" required>
            </div>
            <div class="col-2">
                <label for="form-label" for="numero4"> Número 4</label>
                <input class="form-control" type="number" id="numero4" name="numero4" required>
            </div>
            <div class="col-2">
                <label for="form-label" for="numero5"> Número 5</label>
                <input class="form-control" type="number" id="numero5" name="numero5" required>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <label for="form-label" for="numero6"> Número 6</label>
                    <input class="form-control" type="number" id="numero6" name="numero6" required>
                </div>
                <div class="col-2">
                    <label for="form-label" for="numero7"> Número 7</label>
                    <input class="form-control" type="number" id="numero7" name="numero7" required>
                </div>
                <div class="row mt-4 mb-4 justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
            </div>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = [
            $_POST["numero1"],
            $_POST["numero2"],
            $_POST["numero3"],
            $_POST["numero4"],
            $_POST["numero5"],
            $_POST["numero6"],
            $_POST["numero7"]
        ];
        $menor = min($numeros);
        echo '<h1 class="text-light text-center mt-3">O menor número é ' . htmlspecialchars($menor) . '</h1>';
    }
    ?>
</div>