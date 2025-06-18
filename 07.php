<?php include 'includes/header.php';

interface TransporteInterfaz { // el polimorfismo nos deja poder crear mas metodos si es una clase que implementa polimorfismo, como la clase "automovil" definida mas adelante

    public  function getInfo():string;
    public function getRuedas():int;



}

class Transporte implements TransporteInterfaz { //el implements es para instanciar la interfaz
    public function __construct(protected int $ruedas, protected int $capacidad){

    }

    public  function getInfo():string {
        return "El transporte tiene: ". $this->ruedas . " y una capacidad de: " . $this->capacidad . " personas ";
    }

    public function getRuedas():int {
        return $this->ruedas;
    }

}

class Automovil extends Transporte implements TransporteInterfaz { //esta clase es polimorfismo
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color){

    }


    //como es polimorfismo nos deja crear mas metodos sin problemas 
    public  function getInfo():string {
        return "El transporte auto tiene: ". $this->ruedas . " y una capacidad de: " . $this->capacidad . " personas y tiene el color ". $this->color;
    }

    public function getColor():string {
        return "El color es: " . $this->color;
    }
}

echo "<pre>";

var_dump($transporte = new Transporte(8,20));
var_dump($auto = new Automovil(4,4,"Rojo"));

echo $transporte->getInfo();
echo "<br>";
echo $auto->getInfo();

echo $auto->getColor();

echo "</pre>";

include 'includes/footer.php';