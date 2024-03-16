<?php

    //  OBTER DADOS COM PHP A PARTIR DA BASE DE DADOS

    //  Define as propriedades da ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123';


    try {
        
        //  Efeturar conexão
        $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

        // variável de teste para buscar coluna em uma query no PHP
        $col_db = 'produtos';

        //fetchAll() - 
        $resultados = $ligacao->query("SELECT * FROM $col_db")->fetchAll();
        
        // fecha conexão
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
    <ul>
        <?php foreach($resultados as $linha) : ?>
            <li><?= 'Produto: <strong>' . $linha['produto'] . '</strong>' ?></li>           
            <li><?= 'Valor: R$ <strong>' . $linha['preco_unidade'] . '</strong>'  ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
            
    
    
</body>
</html>



   