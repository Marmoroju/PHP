<?php

    //  $_SESSION
    // Acesso para leitura e manipulação das variáveis de sessão

    session_start();

    $_SESSION['usuario'] = 'marcos';
    $_SESSION['perfil'] = 'admin';
    $_SESSION['autorizado'] = true;
    
    echo '<pre>';
    print_r($_SESSION);