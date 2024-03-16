<?php

    /*  
    
        Constantes Mágicas
        Existem nove constantes mágicas no PHP
        As mais utilizdas são...
        
    */

    //  __LINE__
    //  Indica a linha atual do código onde a constante se encontrar    
    
    #   echo 'Número da linha em index.php: ' . __LINE__ . '<br>';

    //  __FILE__
    // Indica o caminho completo do arquivo
    // Se for usada dentro de um include ou require
    // será indicado o nome do script
    
    #$arquivo = 'index.php';
    #echo 'Caminho do arquivo "' . ($arquivo) . '" => ' . __FILE__ . '<br>';

    //  __DIR__
    //  Tem  o mesmo output que o __FILE__
    //  Não tem barra '/' no final do valor, a não ser que esteja na raiz
    //  indica a pasta a qual pertence o script atual

    #echo '(index.php): ' . __DIR__ . '<br>';        # mesmo output do __FILE__

    // __FUNCTION__
    // O nome da funcao onde o código está a ser executado

     adicionar(10,20);
     
     function adicionar ($a, $b)
     {
        echo $a + $b . '<br>';
        echo __FUNCTION__;
     }

