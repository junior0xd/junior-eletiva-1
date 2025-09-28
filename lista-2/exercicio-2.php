<div class="container mt-4">
    <h1 class="fs-4 text-center">Exercício 2 - Lista 2</h1>
    <form action="?page=exercicio-2" method="POST">
        <div class="row justify-content-center">
            <div class="col-2">
                <label for="form-label" for="valor1"> Valor 1</label>
                <input class="form-control" type="number" id="valor1" name="valor1" required>
            </div>
            <div class="col-2">
                <label for="form-label" for="valor2"> Valor 2</label>
                <input class="form-control" type="number" id="valor2" name="valor2" required>
            </div>
            <div class="row mt-4 mb-4 justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            
            if($valor1 == $valor2) {
                $soma = $valor1 * 3;
            } else {
                $soma = $valor1 + $valor2;
            }
            echo '<h1 class="text-light text-center mt-3">A soma dos valores é igual a ' . htmlspecialchars($soma) . '</h1>';
        }
        ?>
</div>