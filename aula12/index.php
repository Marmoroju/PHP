<?php

    #um empresa tem varias lojas
    #a variavel cidade indica que dados de email
    #deverao ser apresentados
    #apresente o email correspondente
    #quando alterar o calor da cidade escolhida

    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com'
    ];
    $cidade = 'coimbra'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if($cidade == 'lisboa') : ?>
        <p><?= $lojas['lisboa'] ?></p>
    <?php elseif($cidade == 'porto') : ?>
        <p><?= $lojas['porto'] ?></p>
    <?php elseif($cidade == 'coimbra') : ?>
        <p><?= $lojas['coimbra'] ?></p>                
    <?php else : ?>
        <p>Nenhuma email encontrado para essa cidade</p>
    <?php endif; ?>
    
</body>
</html>