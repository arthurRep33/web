<!DOCTYPE html>
<html lang="pt -br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>


    </nav>
    <main>
        <h1>CALCULADORA</h1>
        
      <form action="" method="POST">
            <label for="nome"> Digite o 1° num:</label>
            <input type="number" name="num1">
            <br><br>
            <label for="nome"> Digite o 2° num:</label>
            <input type="number" name="num2">
            <br><br>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){

            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];
            $resultado = $numero1 + $numero2;

            echo "A soma dos números é: " . $resultado . "<br>";
            }


        ?>


    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>

</body>
</html>