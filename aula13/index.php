<?php 

    #apresentar mensagem de erro com CSS

    $mensagem_erro = 'gegegege';

    $css = '';
    $mensagem = null;
    if(!empty($mensagem_erro)) {
        $css = 'erro';
        $mensagem = $mensagem_erro;
    } else {
        $css = 'sucesso';
        $mensagem = 'SUCESSO';
    }

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

        <div class="<?= $css ?>"><?= $mensagem ?></div>


</body>
</html>