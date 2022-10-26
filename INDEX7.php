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
    class Perro
    {
        public $numExtremidades = 4;
        public $nombre;
        function __construct($nombre)
        {
            $this->nombre = $nombre;
        }
        public function ladrar()
        {
            return  'Woof!';
        }
        public function saludar()
        {
            return 'Hola soy [' . $this->nombre . '] gusto en conocerte';
        }
    }
    $perro1 = new Perro('Barker');
    $perro2 = new Perro('Amigo');
    echo($perro1->ladrar());
    echo("<br>");
    echo($perro2 -> saludar());
    ?>
</body>

</html>