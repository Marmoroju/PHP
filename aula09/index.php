<?php
    #acrescentar produtos no final do array
    $produtos = ['arroz', 'batata', 'laranja'];
    $produtos = array_reverse($produtos);
    array_push($produtos, 'maca', 'pera');
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