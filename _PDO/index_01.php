<?php

    // CONECTAR VIA PDO E CONTROLE DE ERRO

    // Define as propriedades da ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123';

    //  Efetuar a ligação
    //  precisa de 3 parâmetros: DNS onde especifica o host e nome da base de dados
    //  nome do usuário e o password

    $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

    //  verificar se a ligação foi estabelecida corretamente
    $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $estado;   //  se conectar, irá retornar -> localhost via TCP/IP

    //  Existem 3 etapas numa comunicação com a base de dados:
    //  1. Conectar com a base de dados;
    //  2. Comunicar com a base de dados;
    //  3. Fechar a ligação para liberar recursos.

    //  Para destruir a conexão bastará destruir o objeto $ligação

    $ligação = null;
