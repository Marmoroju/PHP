<?php

    // TRATAMENTO DAS INFORMAÇÕES
    //  SEGURANÇA - forma segura de enviar informações ao banco 
    //  através do PHP

    //  prepare / execute
    
    //  Define as propriedades da ligação
    $database = 'udemy_loja_online';
    $username = 'user_loja_web';
    $password = 'abc123'; 
    


    try {

        $parametros = [
            ':u' => $_POST['text_username'],
            ':p' => $_POST['text_passwrd']
        ];

        //  Efetua conexão
        $ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password); 
        
        //prepare / execute / fetchAll() - 
        $comando = $ligacao->prepare("SELECT * FROM usuarios WHERE username = :u AND passwrd = :p");
        $comando->execute($parametros);
        $resultados = $comando->fetchAll(PDO::FETCH_OBJ);
        

        // fecha conexão
        $ligação = null;    

    } catch(PDOException $err) {

        echo 'ERRO: ' . $err->getMessage();

    }

    echo '<pre>';
    print_r($resultados);

    if(count($resultados) == 0) {
        echo 'Login Inválido.<br>';
    } else {
        echo 'Login OK!<br>';
    }

    //SQL_INJECTION ' or''='
?>
