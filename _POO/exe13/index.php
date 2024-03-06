<?php

    // $nomes = [ 'joao', 'ana', 'carlos', 'francisco', 'maria' ];
    // foreach( $nomes as $nome ) {
    //     echo "$nome <br>";
    // }

    $posicoes = [
        #'chave' => 'valor'
        'administrador' => 'joao',
        'secretario' => 'ana',
        'colaborador' => 'carlos'
    ];

    foreach( $posicoes as $chave => $valor ) {
        echo "Com a posição de $chave, temos a seguinte pessoa: $valor <br>";
    }

