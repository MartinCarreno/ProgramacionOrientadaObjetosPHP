<?php include 'includes/header.php';

abstract class Transporte { //el abstract es para poder impedir que la clase se instancie
    public function __construct(protected int $ruedas, protected int $capacidad){

    }

    public  function getInfo():string {
        return "El transporte tiene: ". $this->ruedas . " y una capacidad de: " . $this->capacidad . " personas ";
    }

    public function getRuedas():int {
        return $this->ruedas;
    }

}


class Bicicleta extends Transporte{ //para poder hacer herencia se utiliza extends, como en otros lenguajes
    public function getInfo():string {
        return "El transporte tiene: ". $this->ruedas . " y una capacidad de: " . $this->capacidad . " personas ". " y no gasta GASOLINA ";
    }
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){ //para cambiar el constructor se copia el mismo de la clase padre y se agrega el cambio

    }

    public function getTransmision():string {
        return $this->transmision;
    }
}

$bicleta = new Bicicleta(2, 1);
$auto = new Automovil(4, 5, 'Manual');

$transporte = new Transporte(1,2); // como es una clase abstracta, no dejará instanciar este codigo y manda error al ejecutar
//envia el siguente error:  [::1]:58349 [500]: GET /05.php - Uncaught Error: Cannot instantiate abstract class Transporte in C:\UBICACION\05.php:38
//Stack trace: #0 {main}

echo $transporte->getInfo();
echo "<hr>";
echo $bicleta->getInfo();
echo $bicleta->getRuedas();
echo "<hr>";
echo $auto->getInfo();
echo $auto->getTransmision();
echo "<hr>";

include 'includes/footer.php';