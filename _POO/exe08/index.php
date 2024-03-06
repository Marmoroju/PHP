<?php

    $mensagem_erro = 'dfds';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sucesso {
            color: white;
            background-color: darkgreen;
        }
        .erro {
            color: white;
            background-color: darkred;
        }
    </style>
</head>
<body>
    
    <?php if($mensagem_erro == '') : ?>    
        <p class='erro'>Erro</p>
    <?php else :?>    
        <p class='sucesso'>Sucesso</p>
    <?php endif; ?>    
    
</body>
</html>