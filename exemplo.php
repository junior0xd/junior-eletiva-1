<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    <?php
        $dia = date('d \d\e F \d\e y')
    ?>
    <h1>Hoje é dia <?= $dia ?></h1>
</body>
</html>