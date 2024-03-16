<?php

    //CONTROLADOR DE TRANSAÇÕES
    // IRÁ INSERIR DADOS NO BANCO APENAS SE NÃO HOUVER ERRO NA EXECUÇÃO DA QUERY

    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123'; 

    try {

        //  Efetua conexão
        $ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password); 
        
        //  Código de Execução
        $ligacao->beginTransaction();
        $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user1', '111')");
        $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user2', '222')");
        $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user3', '333')");
        //erro proposital
        $ligacao->exec("INSERT INTO  VALUES(0, 'user4', '444')" );
        $ligacao->commit();


        // fecha conexão
        $ligação = null;    

    } catch(PDOException $err) {

        $ligacao->rollBack();
        echo 'ERRO: ' . $err->getMessage();

    }