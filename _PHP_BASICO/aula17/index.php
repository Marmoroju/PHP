<?php

// Validação se dado é uma STRING

$valor1 = "marcos";
$valor2 = 123;

var_dump(is_string($valor2));
echo '<br>';


// Validação se valor é NUMERICA

$valor3 = 123;
$valor4 = "marcos";

var_dump(is_numeric($valor3));
echo '<br>';
var_dump(is_numeric($valor4));
echo '<br>';


// Validar se valor é BOOLEANO

$valor5 = "false";
$valor6 = true;
$valor7 = "marcos";

var_dump(is_bool($valor5));
echo '<br>';
var_dump(is_bool($valor6));
echo '<br>';
var_dump(is_bool($valor7));
echo '<br>';

// validar se está vazia

$valor8 = "texto";
$valor9 = [];
$valor10 = "";

var_dump(empty($valor8));
echo '<br>';
var_dump(empty($valor9));
echo '<br>';
var_dump(!empty($valor10));
echo '<br>';