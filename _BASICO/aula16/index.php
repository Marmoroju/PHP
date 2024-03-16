<?php

    //  $GLOBALS

    //  São variáveis em forma de arrays que estão sempre disponíveis
    //  durante a execução do código.


    $nome = 'marcos';

    apresentar();

    echo $nome;
    echo $apelido;

    function apresentar() {
        global $nome;
        echo $nome . '<br>';

        //  ou

        // pode ser alterado o valor da variável
        $GLOBALS['nome'] = "josé";
        $GLOBALS['apelido'] = " ribeiro";
    }