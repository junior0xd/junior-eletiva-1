<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média das Notas</title>
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
    <h1 class="text-center w-50 mt-4">Média das Notas</h1>
<form method="post" action="media-notas.php" class="container mt-4">
<div class="row inline-row mb-3"><div class="col-md-3">
              <label for="nota1" class="form-label">Primeira nota</label>
              <input type="number" id="nota1" name="nota1" class="form-control" required="">
            </div><div class="col-md-3">
              <label for="nota2" class="form-label">Segunda nota</label>
              <input type="text" id="nota2" name="nota2" class="form-control" required="">
            </div><div class="col-md-3">
              <label for="nota3" class="form-label">Terceira nota</label>
              <input type="text" id="nota3" name="nota3" class="form-control" required="">
            </div></div>
            <p>Digite três notas para saber a média do aluno.</p>
<button type="submit" class="btn btn-primary">Enviar</button>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $res = ($nota1 + $nota2 + $nota3) / 3; # Todo - Utilizar loop para maior eficiência(?)

    echo '<h1 class="text-center text-light"> A média do aluno foi '.number_format($res, 2).'</h1>';
}

?>
</form>
<script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>
</html>