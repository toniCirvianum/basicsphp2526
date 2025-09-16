    <?php

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $numerosecret=0;
        // ES com un condicional
        $result = $numerosecret==$numero ? "Perfecte" : "Malament";
        echo $result;
        

    }

    ?>