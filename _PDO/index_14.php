<?php

    //INSERE DADOS NO BANCO, MESMO QUE TENHA GERADO ERRO

    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123'; 

    try {

        //  Efetua conexão
        $ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password); 
        
        //  Código de Execução
        $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user1', '111')");
        $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user2', '222')");
        $ligacao->exec("INSERT INTO usuarios VALUES(0, 'user3', '333')");
        //erro proposital
        $ligacao->exec("INSERT INTO  VALUES(0, 'user4', '444')" );


        // fecha conexão
        $ligação = null;    

    } catch(PDOException $err) {

        echo 'ERRO: ' . $err->getMessage();

    }