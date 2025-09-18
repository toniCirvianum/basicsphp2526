<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <?php
        $now = new DateTime('now', new DateTimeZone('Europe/Madrid'));
        //Dona error peruè $now es un objecte i no un string
        // echo $now;
        $simple_date = $now->format('Y/m/d H:i');
        echo $simple_date;
        echo "<br>";
        $date_hour = $now->format('Y-M-D H:i:s');
        echo $date_hour;
        echo "<br>";
        $year = $now->format('Y');
        echo "Any actual: ".$year;
    ?>

<p>
    <?php
        $mounth_days=$now->format('t');
        echo "This mount has $mounth_days days";
    ?>
</p>
    

    
</body>
</html>