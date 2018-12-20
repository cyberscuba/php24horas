<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/php24horas.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Allerta" rel="stylesheet" type="text/css">
    <title>Php 24 Horas Trainer</title>
</head>
<body>
    <p>Hoy es: <?php echo date('M j, Y');?></p>
    
    <?php

    $roll = rand(1, 6);
    echo 'You rolled a ' . $roll;
    ?>
    <br>
    <?php

        $fecha = '22. 11. 1968';
        $inicio =\DateTime::createFromFormat('d. m. Y', $fecha);
        echo "Fecha de Inicio: " . $inicio->format('m/d/Y') . "\n";
        
        $final = clone $inicio;
        $final->add(new \DateInterval(P1M6D));

        $diff = $final->diff($inicio);
        echo "Diferencia: " . $diff->format('%m mes, %d días (total: %a días)') . "\n";
        
    ?>

</body>
</html>