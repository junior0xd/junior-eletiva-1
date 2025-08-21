<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
</head>
<body class="bg-dark container">danger
    <h1 class="text-light text mt-4">Exemplo 2</h1>
<form method="post" action="resposta-num-1.php" class="p-4 mt-4 text-light container">
<div class="row inline-row mb-3"><div class="col-md-2">
              <label for="num1" class="form-label">Primeiro Número</label>
              <input type="number" id="num1" name="num1" class="form-control" required="">
            </div><div class="col-md-2">
              <label for="num2" class="form-label">Segundo Número</label>
              <input type="text" id="num2" name="num2" class="form-control" required="">
            </div></div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>
</html>