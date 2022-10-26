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
    class Gato{
        public $estaVivo = true;
        public $numExtremidades = 4 ; 
        public $nombre; 
        function __construct($nombre)
        {
            $this->nombre = $nombre; 
        }
        public function meow(){
            return 'Meow meow';
        }
    }
    $gato1 = new Gato('CodeCat');
    echo($gato1->meow());
    ?>
</body>
</html>