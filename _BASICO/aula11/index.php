<?php

    #apresentar paragrafo que corresponde
    #ao valor da variavel $nome
    $nome = 'gaia';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if($nome == "joao") : ?>
        <p>o nome é joao</p>
    <?php elseif($nome == "ana") : ?>        
        <p>o nome é ana</p>
    <?php elseif($nome == "marcos") : ?>
        <p>o nome é marcos</p>
    <?php elseif($nome == "martha") : ?>
        <p>o nome é martha</p>
    <?php else : ?>
        <p>Nenhum nome corresponde.</p>        
    <?php endif; ?>
                

    
</body>
</html>