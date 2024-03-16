<?php

    //  OBTER DADOS EM DIFERENTES FORMATOS
    //  A PARTIR DO FETCH() E FETCHALL()

    // PODE UTILIZAR PARAMETROS NESSES METODOS
    
    /*
    
    PDO::FETCH_BOTH     -   Opção padrão
    
    PDO::FETCH_NUM      -   Apenas array com chaves numéricas com índice 0
                            É atribuida uma chave numérica sequencial a cada coluna
    
    PDO::FETCH_ASSOC    -   Apenas array associativo
                            As chaves são os nomes das colunas da tabela
                            
    PDO::FETCH_OBJ      -   Retorna os valores organizados num objeto anonimo
                            em que cada elemento contém as propriedades com os
                            NOMES das COLUNAS                            

    */

       //  Define as propriedades da ligação
       $database = 'udemy_loja_online';
       $username = 'user_loja_web';
       $password = 'abc123';

    try {
        
        //  Efetua conexão
        $ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

        //fetchAll() - 
        $resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_OBJ);
        
        // fecha conexão
        $ligação = null;

        echo '<pre>';
        print_r($resultados);

    } catch(PDOException $err) {
        
        echo 'ERRO: ' . $err->getMessage();
        
    }