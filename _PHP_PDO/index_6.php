<?php

    //  OBTER DADOS COM PHP A PARTIR DA BASE DE DADOS

    //  Define as propriedades da ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123';


    try {
        
        //  Efeturar ligação
        $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

        //fetch() - 
        $resultados = $ligacao->query("SELECT * FROM produtos");
        
        //while($linha = $resultados->fetch())
        //{
        //    echo 'Produto: <strong>' . $linha['produto'] . '</strong><br>';
        //}
        
        $ligação = null;

    } catch(PDOException $err) {
        
        echo 'ERRO: ' . $err->getMessage();
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Produtos</h1>
    <ol>
        <?php while($linha = $resultados->fetch()) : ?>
            <li><?= 'Produto: <strong>' . $linha['produto'] . '</strong>' ?></li>
        <?php endwhile; ?>
    </ol>
    
</body>
</html>



   