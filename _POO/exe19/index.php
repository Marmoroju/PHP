<?php

    $texto = "Esta frase vai aparecer com diferentes opacidades.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
</head>
<body>

    <?php for($i = 10; $i >= 0; $i--) : ?>
        <h3 style="opacity: <?= $i / 10?>"><?=$texto ?></h3>
    <?php endfor; ?>


   
</body>
</html>

