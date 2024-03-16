<?php

    // CONECTAR VIA PDO E CONTROLE DE ERRO

    // Define as propriedades da ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123 ';


    try {
        
        //  Efeturar ligação
        $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

        //  verificar se a ligação foi estabelecida corretamente
        $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
        echo $estado;   //  se conectar, irá retornar -> localhost via TCP/IP
     
        
        //  Para destruir a conexão bastará destruir o objeto $ligação
        
        $ligação = null;

    } catch(PDOException $err) {
        
        echo 'ERRO: ' . $err->getMessage();
    }