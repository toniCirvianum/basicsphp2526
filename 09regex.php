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
            <label for="">Escriu un paraula nomes amb lletres</label>
            <!-- El name es el nom de la variable al servidor -->
            <input type="text" name="lletres" >
        </p>
        <p>
            <label for="">Escriu un paraula nomes amb numeros</label>
            <!-- El name es el nom de la variable al servidor -->
            <input type="num" name="numero">
        </p>
        <p>
            <label for="">Escriu un mail</label>
            <!-- El name es el nom de la variable al servidor -->
            <input type="email" name="mail">
        </p>
        <p>
            <label for="">Escriu un lletres, numeros, simbols i 8 caracters com a mínim amb </label>
            <!-- El name es el nom de la variable al servidor -->
            <input type="password" name="password">
        </p>
        <input type="submit" value="FEs clic per enviar">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD']=='POST' 
    && isset($_POST['lletres'])
    && isset($_POST['numero'])
    && isset($_POST['mail'])
    && isset($_POST['password'])) {
        
        $regex="/^[A-Za-z]{8,}$/";
        if (preg_match($regex,$_POST['lletres'])) {
            echo "molt bé son lletres";
            echo "<br>";
        }
        else {
            echo "no es correcte no son letres";
            echo "<br>";
        }

        $regex="/^[0-9]$/";
        if (preg_match($regex,$_POST['numero'])) {
            echo "molt bé son nuemros";
            echo "<br>";
        }
        else {
            echo "no es correcte no son numeros";
            echo "<br>";
        }
        
        if (filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) {
            echo "molt bé es un email";
            echo "<br>";
        }
        else {
            echo "no es correcte no es email";
            echo "<br>";
        }

        $regex="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{8,}$/";
        if (preg_match($regex,$_POST['numero'])) {
            echo "molt bé la contrasenya es correcta";
            echo "<br>";
        }
        else {
            echo "no es correcta la contrasenya";
            echo "<br>";
        }

    }

    ?>



    
</body>
</html>