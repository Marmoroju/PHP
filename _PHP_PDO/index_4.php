<?php

    // CONECTAR VIA PDO E CONTROLE DE ERRO

    // Define as propriedades da ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123';


    try {
        
        //  Efeturar ligação
        $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
        $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $resultados = $ligacao->query("SELECT");
        
        $ligação = null;

    } catch(PDOException $err) {
        
        echo 'ERRO: ' . $err->getMessage();
        echo '<pre>';
        //print_r($err);

        echo '<hr>';
        print_r($err->errorInfo[2]);
                   
        
    }