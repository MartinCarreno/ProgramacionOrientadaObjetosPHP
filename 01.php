<?php 
declare(strict_types= 1); // para que detecte cuando uno pase un atributo que no es valido, Tiene que ir primero que todo
include 'includes/header.php';
//definir clase

class Producto {
    //Sintaxis Clasica

    /* public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible) {
        $this->nombre = $nombre; //la flecha va para poder hacer referencia a un objeto
        $this->precio = $precio;
        $this->disponible = $disponible;
     }  */

    //Sintaxis Nueva
    public function __construct(public string $nombre, public int $precio, public bool $disponible) //para el constructor en php siempre empieza __ 
    {
    }

    public function mostrarProducto() {
        echo "El Producto es: ". $this->nombre . " y su precio es de: " . $this->precio;
    }
}


$producto = new Producto('Tablet',200,true);

$producto->mostrarProducto(); // la sintaxis de flecha tambien es para llamar funciones (metodos )

/* 
$producto -> nombre = ; //asi se asigna el atributo
$producto -> precio = 200; //asi se asigna el atributo
$producto -> nombre = true; //asi se asigna el atributo */

$producto2 = new Producto('Monitor Curvo', 300, true);
echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";


include 'includes/footer.php';