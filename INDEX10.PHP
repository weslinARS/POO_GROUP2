<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Forma{
        public $tieneLados = true ; 
    }
    class Cuadrado extends Forma{

    }
    $cuadrado = new Cuadrado();
    if(property_exists($cuadrado,'tieneLados')){
        echo 'Tengo lados';
    }
    ?>
</body>
</html>