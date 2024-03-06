<?php 

// for ( $indice = 1; $indice <= 10; $indice++ ) {
//     echo "Índice: $indice <br>";
// }

// for( $i = 0; $i < 10; print $i, $i++ ) {    
// }

$nomes = [ 'joao', 'ana', 'carlos' ];
for ( $i = 0; $i < count( $nomes ); $i++ ) {
    sort($nomes);
    echo $nomes[ $i ] .  '<br>';
}

