<?php
    $valor = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if ($valor == 10) : ?>
        <p>Valor é igual a 10!</p>
    <?php else : ?>
        <p>Valor é diferente de 10!</p>    
    <?php endif; ?>        

</body>
</html>