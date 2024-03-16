<?php 

// Validar se tem número de caracteres válidos (3 a 20)

$valor = "joao ribeiro é o instrutor";
var_dump($valor);       #var_dump -> conta o número de caractere.
echo '<br>';

if(strlen($valor) < 3 || strlen($valor) > 20) {
    echo "A string deve ter entre 3 e 20 caracteres.<br>";
}

//validar se mé um email válido

$email = "marcosmourao@email.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo '<br>';


//  validar se é uma URL válida
$url = "https://www.google.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL));
echo '<br>';

//  Expressão Regular [ER] -- preg_match quer dizer "P Regular match"
// \d{n}$ significa que além de ^9{1} o primiro digito ter que começar 
//com o "9" a sua sequencia deverá totalizar 9[0-8] digitos.

var_dump(preg_match("/^9{1}\d{8}$/", "966213456"));
//retorno int(1) = confirma valor analisado
//retorno int(0) = não confirma valor analisado

