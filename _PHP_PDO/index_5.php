<?php

    // OBTER DADOS COM PHP A PARTIR DA BASE DE DADOS

    // Define as propriedades da ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123';


    try {
        
        //  Efeturar ligação
        $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
        //$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //fetchAll() - Busca todas as informações da query
        $resultados = $ligacao->query("SELECT id, produto FROM produtos")->fetchAll();
        echo '<pre>';
        print_r($resultados);
        
        $ligação = null;

    } catch(PDOException $err) {
        
        echo 'ERRO: ' . $err->getMessage();
        //echo '<pre>';
        //print_r($err);

        //echo '<hr>';
        //print_r($err->errorInfo[2]);
                   
        
    }

    //  fetch() Busca o próximo elemento da tabela de dados
    //  fetchAll() Busca todos os elementos de uma só vez