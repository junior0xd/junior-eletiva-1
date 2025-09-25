<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-tut/bootstrap.min.css">
    <title>Resposta Exemplo 2</title>
</head>
<body class="bg-dark text-light">
    <?php 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $soma = $num1 + $num2;
    
    ?>
    <h1 class="mt-4 text-center">A soma é <?php echo $soma; ?></h1>

    
    <script src="../bootstrap-tut/bootstrap.bundle.min.js"></script>
</body>
</html>