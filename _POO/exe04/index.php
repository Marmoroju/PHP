<?php

declare(strict_types = 1);

class Usuario
{
    public readonly String $usuario;

    public function __construct($u)
    {
        $this->usuario = $u;
    }

    public function alterar()
    {
        $this->usuario = 'joao';
    }
   
}

$user = new Usuario('Marcos');
echo $user->usuario;


