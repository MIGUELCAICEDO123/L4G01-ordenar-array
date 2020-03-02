<?php
 $array = [1,5,9,6,2,7,3,8,4,9]
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF_8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>prueba</title>
</head>
<body>
    Array de entrada: <?= implode(',',$array) ?>
    <br>
    <?php sort($array) ?>
    Array de salida: <?= implode(',', $array) ?>
</body>
</html>