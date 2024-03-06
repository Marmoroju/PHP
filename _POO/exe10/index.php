<?php

$valor = 101;
//  
//  $resultado = match(true) {
//      $valor > 100 => 'valor maior que 100',
//  };
//  
//  echo $resultado;

$resultado = match(true) {
    $valor == 100 => funcao1(),
    $valor > 100 => funcao2(),
};

echo $resultado;

function funcao1()
{
    return 'igual a 100';
};

function funcao2()
{
    return 'maior que 100';
};


?>