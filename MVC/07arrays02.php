<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Associative Arrays</h1>

<?php

     $capitals = [
            'France'=>'Paris',
            'Spain'=>'Madrid',
            'Italy'=>'Rome',
            'German'=>'Berlin'
        ];

        $capitals['Greek']='Athens';

        $franceCapital = $capitals['France'];
        // No s'utiltiza per afegir valors als arrays asociatius
        // array_push($capitals,'Andorra');

        echo "<pre>";
        print_R($capitals);
        echo "</pre>";

        $existeix = in_array('Andorra',$capitals)? "Andorra esta introduida":"L'has d'introduir";
        echo $existeix;

        foreach ($capitals as $pais => $capital) {
            echo "La capital de $pais es $capital";
        }
?>
    
</body>
</html>