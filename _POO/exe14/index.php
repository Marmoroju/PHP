<?php 

    // $parar = 5;
    // for( $i = 0; $i <= 10; $i++ ) {
    //     echo "$i <br>";
    //     if ( $i == $parar ) {
    //         break;
    //     }
    // }

    // $nomes = [ 'joao', 'ana', 'carlos', 'francisco', 'maria' ];
    // $nome_que_vai_interromper = 'carlos';
    // foreach ( $nomes as $nome ) {
    //     echo "$nome <br>";
    //     if( $nome == $nome_que_vai_interromper ) break;
    // }

    // $ignorar = 'francisco';
    // foreach( $nomes as $nome ) {
    //     if( $nome == $ignorar ) continue;
    //     echo "$nome <br>";
    // }

    $paises = [
        'Portugal' => [ 'Lisboa', 'Porto', 'Coimbra' ],
        'Brasil' => [ 'Brasília', 'São Paulo', 'Rio de Janeiro' ],
        'Angola' => [ 'Luanda', 'Cabinda', 'Huambo' ],
        'Moçambique' => [ 'Maputo', 'Matola', 'Nampula' ]
    ];

    foreach( $paises as $pais => $cidades ) {
        
        echo "<h3><u> $pais </u></h3>";

        foreach( $cidades as $cidade ) {
            if( $cidade == 'Cabinda' ) break 2;

            echo "<p> $cidade </p>";
        }
    }