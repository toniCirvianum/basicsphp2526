<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>classic arrays</h1>

<?php

    $fruits = ['apple', 'orange', 'melon', 'banana'];
    $fruits2 = array('apple', 'orange', 'melon', 'banana', 'lemon');
    $a = [["hola"],["adeu"]];
    
    echo "<pre>";
    print_r( $fruits);
    // echo "</pre>";
    // echo "<pre>";
    var_dump($fruits2);
    echo "</pre>";

    foreach ($fruits as $fruit) {
        echo  "<li>la frutia és $fruit</li>";
    }

?>
    
</body>
</html>