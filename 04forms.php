<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>El meu primer formulari</h1>

    <form action="" method="get">
        <p>
            <label for="">EScriu un numero</label>
            <!-- El name es el nom de la variable al servidor -->
            <input type="text" name="numero">
        </p>
        <input type="submit" value="FEs clic per enviar">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "el numero que has enviat es el $numero";
        echo "el numero que has enviat es el". $numero;

    }

    ?>



</body>

</html>