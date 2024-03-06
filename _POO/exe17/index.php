<?php

    $nomes = [ 'joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo' ];
  

    foreach(  $nomes as $key => $value ) {
        
        if( $key == 4 ) continue;

        print( $value . "<br>" );
    }
?>

