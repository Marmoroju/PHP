<?php

    $nome = 'mARcOs';
    $nome = strtoupper($nome);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if ($nome == 'MARCOS') : ?>
        <p>O nome é Marcos</p>
    <?php elseif($nome == 'ANA') : ?>  
        <p>O nome é Ana</p>
    <?php elseif($nome == 'CARLOS') : ?>
        <p>O nome é Carlos</p>
    <?php else : ?>   
        <p>É um nome desconhecido</p>
    <?php endif; ?>



</body>
</html>