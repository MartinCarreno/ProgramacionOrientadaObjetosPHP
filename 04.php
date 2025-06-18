<?php include 'includes/header.php';

class Transporte {
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
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){

    }

    public function getTransmision():string {
        return $this->transmision;
    }
}

$bicleta = new Bicicleta(2, 1);
$auto = new Automovil(4, 5, 'Manual');
echo $bicleta->getInfo();
echo $bicleta->getRuedas();
echo "<hr>";
echo $auto->getInfo();
echo $auto->getTransmision();
echo "<hr>";

include 'includes/footer.php';