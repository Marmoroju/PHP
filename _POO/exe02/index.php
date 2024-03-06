<?php

/* 
1. Criar uma classe Humanos.

2. A classe deve ter 3 propriedades privadas onde 
   vamos guardar masculinos, femininos e desconhecidos

3. No método definir() devemos passar dois argumentos:
   sexo e nome.
   O método deverá implementar a lógica para construir
   as coleções de homens, mulheres e desconhecidos

4. Deverá implementar 3 métodos, cada um deles para
   devolver a coleção de nomes masculinos, femininos e desconhecidos

5. Neste script já existem, uma coleção de dados.
   Deverás importar a classe Humanos, instanciar num objeto $humanos.
   Iterar por todos os elementos da coleção $dados e passar a informação
   para dentro do objeto $humanos.

6. Finalmente, criar uma estrutura básica de HTML dentro do script
   e apresentar um título h1 para cada tipo de identidade e uma
   lista desordenada que vai apresentar cada um dos nomes de cada
   entidade colecionada (masculinos, femininos e desconhecidos)

   Deves separar cada uma das coleções com uma horizontal rule

   NOTA: m ou M = masculino
         f ou F = feminino
         outros... desconhecido
*/

//namespace
require_once ('index_ns_classe.php');
use classe\Humanos;



$dados = [
    ['m', 'Marcos'],
    ['f', 'Martha'],
    ['m', 'Banguela'],
    ['f', 'Gaia'],
    ['d', 'desconhecido'],  
    
];

$humano = new Humanos();
foreach($dados as $dado){
    $humano->definir($dado[0], $dado[1]);
}

$masc = $humano->get_masculino();
$femi = $humano->get_feminino();
$desc = $humano->get_desconhecido();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MASCULINO</h1>
    <ul>
        <?php foreach($masc as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>FEMININO</h1>
    <ul>
        <?php foreach($femi as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?> 
    </ul>

    <h1>DESCONHECIDO</h1>
    <ul>
        <?php foreach($desc as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>