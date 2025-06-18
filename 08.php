<?php include 'includes/header.php';

//Incluir las otras clases

require 'clases/Clientes.php';
require 'clases/Detalles.php';
// require 'clases/Detalles.php';

// function mi_autoload($clase){ //Importante, crear este autoload para poder instanciar automatico

//     require __DIR__ . '/clases/' . $clase . '.php';
// }

// spl_autoload_register('mi_autoload'); //con esto podemos instanciar las clases automaticamente segun las vaya llamando en el codigo

class Clientes {
    public  function __construct() {
        echo "Desde 08.php que contiene los clientes";
    }
}

$detalles = new App\Detalles(); // De esta forma se llama la clase con el namespace. Primero va el "namespace" luego "\" y despues el nombre de la clase "Clase()"
$clientes = new App\Clientes();
$clientes2 = new Clientes();

include 'includes/footer.php';