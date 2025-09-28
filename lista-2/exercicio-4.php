<div class="container mt-4">
    <h1 class="fs-4 text-center">Exercício 4 - Lista 2</h1>
    <form action="?page=exercicio-4" method="post">
        <div class="row justify-content-center">
            <div class="col-2">
                <label for="valor"> Valor do produto</label>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input class="form-control" type="number" step="0.01" id="valor" name="valor" required>
                </div>
            </div>
            <div class="row mt-4 mb-4 justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST["valor"];
            
            if($valor > 100) {
                $desconto = $valor * 0.15;
                $valor_final = $valor - $desconto;
                echo '<h1 class="text-light text-center mt-3">O valor final com desconto é R$ ' . number_format($valor_final, 2) . '</h1>';
            } else {
                echo '<h1 class="text-light text-center mt-3">O valor final é R$ ' . number_format($valor, 2) . '</h1>';
            }
        }
    ?>
</div>