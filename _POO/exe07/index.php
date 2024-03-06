<?php

    $lojas = [
        'LISBOA' => 'lisboa@gmail.com',
        'PORTO' => 'porto@gmail.com',
        'COIMBRA' => 'coimbra@gmail.com'
    ];

    $cidade = 'porto';
    $cidade = strtoupper($cidade);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(key_exists($cidade, $lojas)) : ?>    
        <h3><?= $cidade ?></h3>
        <p><?= $lojas[$cidade] ?></p>
    <?php else : ?>
        <p>Não existe nenhuma loja na cidade indicada</p>
    <?php endif; ?>
    
</body>
</html>