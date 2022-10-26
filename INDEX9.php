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
    class Person{
        public string $nombrePersona; 
        public string $apellidoPersona; 
        public float $alturaPersonaCm; 
        public int $edadPersona;
        public function __construct( string $nombre,  string $apellido, float $altura,  int $edad)
        {
            
            $this->nombrePersona =$nombre ; 
            $this->apellidoPersona =$apellido; 
            $this->alturaPersonaCm =$altura; 
            $this->edadPersona = $edad; 
        }
        public function Saludar(){
            return 'Hola me llamo '.$this->nombrePersona.' '.$this->apellidoPersona.' y tengo '.$this->edadPersona.' años de edad';
        }
        public function convertirAturaMt(){
            return 'mido ->'.($this->alturaPersonaCm/100).' metros';
        }
    }

    $me = new Person('weslin','Silva',174.0,19);
    echo $me->Saludar();
    echo("<br>");
    echo $me->convertirAturaMt();
    ?>
</body>
</html>