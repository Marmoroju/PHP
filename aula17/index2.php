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