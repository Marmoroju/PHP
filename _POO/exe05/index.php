<?php

    $produtos = [
        'arroz',
        'batata',
        'laranja',
        'feijão',
        'castanha'
    ];

    //$produtos = array_reverse($produtos);         # Apresenta o array na ordem inversa
    //array_push($produtos, 'maçã', 'pêra');        # Acrescenta dados no final do array
    //sort($produtos);                              # Organiza o array em ordem alfabética/numérica
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <li><?= $produtos[0] ?></li>
        <li><?= $produtos[1] ?></li>
        <li><?= $produtos[2] ?></li>
        <li><?= $produtos[3] ?></li>
        <li><?= $produtos[4] ?></li>
    </ul>
    
</body>
</html>