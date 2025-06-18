<?php include 'includes/header.php';

//Incluir las otras clases

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

function mi_autoload($clase){ //Importante, crear este autoload para poder instanciar automatico

    require __DIR__ . '/clases/' . $clase . '.php';
}

spl_autoload_register('mi_autoload'); //con esto podemos instanciar las clases automaticamente segun las vaya llamando en el codigo

$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';