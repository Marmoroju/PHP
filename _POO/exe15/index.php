<?php

    $tab = 5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Tabuada de <?= $tab ?></h1>
    <?php for( $i = 1; $i <= 10; $i++ ) : ?>    
        
        <?php $resultado = $tab * $i?>
        <?="$tab x $i = $resultado<br>" ?>        
                    
    <?php endfor; ?>


</body>
</html>