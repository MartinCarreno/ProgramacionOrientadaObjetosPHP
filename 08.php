<?php include 'includes/header.php';

//Incluir las otras clases

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes; //esto nos permite eliminar el namespace cuando se instancia la clase. esta forma se utiliza en laravel
use App\Detalles;


//IMPORTANTE, composer ya trae un autoiload predeterminado, es mejor importarlo al iniciar composer

// function mi_autoload($clase){ //Importante, crear este autoload para poder instanciar automatico
//     $partes = explode('\\', $clase); //esto nos crea un arreglo con "App\Detalles" separado de esta forma App Detalles.

//     require __DIR__ . '/clases/' . $partes[1] . '.php'; //como es un arreglo, tiene que ser [1] para llamar el nombre de la Clase
// }

// spl_autoload_register('mi_autoload'); //con esto podemos instanciar las clases automaticamente segun las vaya llamando en el codigo


// $detalles = new App\Detalles(); // De esta forma se llama la clase con el namespace. Primero va el "namespace" luego "\" y despues el nombre de la clase "Clase()"
$detalles = new Detalles(); // con use al principio podemos solo llamar a la Clase
$clientes = new Clientes();



include 'includes/footer.php';