<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtração</title>
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
</head>
<body class="bg-dark container">
    <h1 class="text-light text mt-4">Subtração</h1>
<form method="post" action="subtracao-exercicio.php" class="p-4 mt-4 text-light container">
<div class="row inline-row mb-3"><div class="col-md-2">
              <label for="num1" class="form-label">Primeiro Número</label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div><div class="col-md-2">
              <label for="num2" class="form-label">Segundo Número</label>
              <input type="text" id="num2" name="num2" class="form-control" required="">
            </div></div>
            <p>Digite um número e depois outro que irá subtrair o primeiro. </p>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $res = $num1 - $num2;
    
    echo '<div><h1 class="mt-4 text-center text-light">O resultado é '.$res.'</h1></div>';
  }


?>

<script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>
</html>