<?php
    $nome = "senai";
    $idade = 18;
    $altura = 1.80;
    $peso = 73;
    $malhado = false;

    //Calculo do IMC
    $imc = $peso / ($altura * $altura);
    /*
    Impressão das informações
    */
    echo "Nome " . $nome;
    echo "<br>";
    echo "Valor IMC: <br>". $imc."<br>";

    if ($imc > 30){
        echo "Acimado Peso!";
    }else{
        echo "Peso normal!";
    }



?>
