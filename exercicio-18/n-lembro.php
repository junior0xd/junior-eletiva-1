<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $capital = 1; //TODO
        $taxa = 1;
        $periodo = 1;

        $juros = $capital * (1 + $taxa) ** $periodo;

        echo "O valor do juros é: $juros";
    }
    ?>
</body>

</html>