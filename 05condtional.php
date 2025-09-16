<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
        <p>
            <label for="">EScriu un numero</label>
            <!-- El name es el nom de la variable al servidor -->
            <input type="num" name="numero">
        </p>
        <input type="submit" value="FEs clic per enviar">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $numerosecret=0;
        // ES com un condicional
        $result = $numerosecret==$numero ? "Perfecte" : "Malament";
        echo $result;
        

    }

    ?>



    
</body>
</html>