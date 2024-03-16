<?php

    class XYZ {
        //public $id;
        //public $produto;
        //public $preco_unidade;
    }


       //  Define as propriedades da ligação
       $database = 'udemy_loja_online';
       $username = 'user_loja_web';
       $password = 'abc123';

    try {
        
        //  Efetua conexão
        $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

        //fetchAll() - 
        $resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_CLASS, "XYZ");
        
        //echo '<pre>';
        //print_r(var_dump($resultados));

        // fecha conexão
        $ligação = null;

        echo '<pre>';
        print_r($resultados);

    } catch(PDOException $err) {
        
        echo 'ERRO: ' . $err->getMessage();
        
    }