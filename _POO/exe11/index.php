<?php

    // $valor = 0;
    // while($valor <= 10) {
    //     echo "Valor: $valor </br>";
    //     $valor++;        
    // }

    // $valor = 0;
    // do {
    //     echo "3 x $valor = " . $valor * 3 . "<br>";
    //     $valor++;
    // } while($valor <= 10); 

    $valor = 1;
    $valor2 = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <!-- while-->
        <?php while( $valor <=10 ) : ?>
            <h3>Valor = <?= $valor++ ?></h3>
        <?php endwhile; ?>

        <!-- do/while-->
        <?php do { ?>
            <h3><?= $valor2++ ?></h3>
        <?php } while( $valor2 <= 10 ) ?>
    
</body>
</html>