<?php
ob_implicit_flush(true);


$contador = 0;
 echo "\rContador:  $contador";
while ($contador < 10) {
    $contador++;

    // Volta só o número (não repete a palavra)
     echo "$contador\r";
    ob_flush();
    flush();

    usleep(50000);
}

   

echo PHP_EOL;
?>