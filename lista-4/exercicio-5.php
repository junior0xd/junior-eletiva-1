<div class="container">
    <h1 class="text-center mt-4 fs-2">Exercício 5 - Lista 4</h1>
    <form action="?page=exercicio-5" method="post">
        <div class="row justify-content-center">
            <div class="col-4">
                <label class="form-label" for="livro">Livro</label>
                <input class="form-control" type="text" id="livro" name="livro">
            </div>
            <div class="col-2">
                <label class="form-label" for="quantidade">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade">
            </div>

            <div class="row mt-4 mb-4 justify-content-center">
                <button type="submit" class="btn btn-primary w-25">Enviar</button>
            </div>
        </div>
    </form>
</div>
<?php
function RecuperarLivros()
{
    $file = fopen("livros.txt", "r");
    $livros = [];
    while (($linha = fgets($file)) !== false) { //pega primeira linha, verifica EOF
        $partes = explode(",", trim($linha));   //quebra a linha em partes
        if (count($partes) == 2) {              //verifica se tem 2 partes
            $livros[$partes[0]] = $partes[1];   //adiciona ao array
        }
    }
    fclose($file);
    return $livros;
}
function OrganizarLivros(&$livros) //parametro por referência
{
    ksort($livros);
}
function ListarLivros()
{
    $livros = RecuperarLivros();
    OrganizarLivros($livros);
    if (count($livros) == 0) {
        echo '<h1 class="text-danger text-center mt-3">Nenhum livro adicionado</h1>';
    } else {
        echo '<div class="container mt-4">';
        echo '<h1 class="text-center fs-3 mb-4">Lista de Livros</h1>';
        echo '<table class="table table-striped table-dark">';
        echo '<thead><tr><th>Livro</th><th>Quantidade</th></tr></thead>';
        echo '<tbody>';
        foreach ($livros as $livro => $quantidade) {
            if ($quantidade < 5) {
                echo '<tr><td class="text-danger">' . htmlspecialchars($livro) . '</td><td class="text-danger">' . htmlspecialchars($quantidade) . '</td></tr>';
            } else {
                echo '<tr><td>' . htmlspecialchars($livro) . '</td><td>' . htmlspecialchars($quantidade) . '</td></tr>';
            }
        }
        echo '</tbody></table></div>';
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = fopen("livros.txt", "a");
    fwrite($file, $_POST["livro"] . "," . $_POST["quantidade"] . "\n");
    fclose($file);
    ListarLivros();
}
?>