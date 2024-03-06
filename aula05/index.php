<?php

#ARRAYS MULTIDIMENSIONAIS

$lojas = [
    'porto' => [
        'telefone' => '12345',
        'email' => 'porto@gmail.com'
    ],
    'lisboa' => [
        'telefone' => '3456',
        'email' => 'lisboa@gmail.com'
    ]        
];

echo $lojas['lisboa']['email'];