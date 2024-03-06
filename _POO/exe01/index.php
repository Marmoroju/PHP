<?php

/*
Este é um pequeno exemplo de como a OOP permite tornar o nosso código
mais bem organizado, mais profissional, mais estruturado.

1. Criar uma classe (class_numero)
2. A classe deverá ter uma propriedade privada número
3. O construtor da classe serve para definir o número
4. O método get_numero() serve para devolver o número
5. O método par_ou_impar() deverá devolver 'par' ou 'impar'após analisar o número
6. O método tabuada() deverá devolver um array com a tabuada do número até 10.
    Exmplo: 3 x 1 = 3
            3 x 2 = 6
            3 x 3 = 9
            ...
7. O método raiz_quadrada() deverá devolver a raz quadrada do número
8. Neste script deveremos importar a classe, criar 4 objetos a partir dela
com os valores 5, 7, 16 e 123.
Para cada uma dessas instâncias, deveremos apresentar:
    a) O número através de get_numero()
    b) Se é par ou impar
    c) A raiz quadrada do número
    d) A tabuada
*/

class Numero 
{
    private $numero;
    
    public function __construct($n)
    {
        $this->numero = $n;        
    }

    public function get_numero()
    {
        return $this->numero;
    }

    public function par_ou_impar()
    {
        return $this->numero % 2 == 0 ? "par" : "impar";
    }

    public function tabuada()
    {
        $resultados = [];
        for($i = 1; $i <= 10; $i++){
            $resultados[] = "{$this->numero} x $i = " . ($this->numero * $i);
        }
        return $resultados;
    }

    public function raiz_quadrada()
    {
        return sqrt($this->numero);
    }

}

$objeto1 = new Numero(5);
echo '<pre>';
echo $objeto1->get_numero() . '<br>';
echo $objeto1->par_ou_impar() . '<br>';
echo $objeto1->raiz_quadrada() . '<br>';
print_r($objeto1->tabuada()) . '<br>';

echo '<hr>';

$objeto2 = new Numero(7);
echo '<pre>';
echo $objeto2->get_numero() . '<br>'; 
echo $objeto2->par_ou_impar() . '<br>';
echo $objeto2->raiz_quadrada() . '<br>';
print_r($objeto2->tabuada()) . '<br>';

echo '<hr>';

$objeto3 = new Numero(16);
echo '<pre>';
echo $objeto3->get_numero() . '<br>';
echo $objeto3->par_ou_impar() . '<br>';
echo $objeto3->raiz_quadrada() . '<br>';
print_r($objeto3->tabuada()) . '<br>';

echo '<hr>';

$objeto4 = new Numero(123);
echo $objeto4->get_numero() . '<br>';
echo $objeto4->par_ou_impar() . '<br>';
echo $objeto4->raiz_quadrada() . '<br>';
print_r($objeto4->tabuada());

?>