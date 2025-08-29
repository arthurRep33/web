<!DOCTYPE html>
<html lang="pt -br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" >
      
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <nav></nav>
    <main>

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
            echo "Valor IMC: <br>". number_format($imc, 2, ',' , '.') ."<br>";

            if ($imc > 30){
            echo "Acimado Peso!";
            }else{
            echo "Peso normal!";
            }
        ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
></script>
</body>
</html>
