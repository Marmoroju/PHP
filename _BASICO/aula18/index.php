<?php

//  TRATAMENTO DE ERROS / EXCEÇÕES
//  Throw / Exception / Try / Catch

class Conta
{

    function adicionar($a, $b) {
        if(!is_numeric($a) || !is_numeric($b)){
           throw new Exception("Pelo menos um dos valores não é numérico");
        }
        return "O resultado é: " . $a + $b;
    }

}

   try 
    { 
       $soma = new Conta();
       echo $soma->adicionar("Marcos", 5);
    } 
    
    catch (Exception $e) 
    {
        echo $e->getMessage();
    }





