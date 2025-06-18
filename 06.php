<?php include 'includes/header.php';

//interfaces
//Las interfaces permiten agrupar un grupo de declaraciones de funciones, pero no las dejara implementar, es basicamente un plano. 
//una interface nos dice que hace una clase, que funciones tiene y datos retorna pero no nos dice como lo hace

interface TransporteInterfaz { //crear una interfaz nos crea reglas sobre como escribir los metodos de las clases que las usen, es decir, solo podremos llamar las funciones como dice la interfaz
    public function getInfo():string;
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

include 'includes/footer.php';