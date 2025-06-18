<?php 
declare(strict_types= 1); // para que detecte cuando uno pase un atributo que no es valido, Tiene que ir primero que todo
include 'includes/header.php';


// Encapsulacion

class Producto {
    //public - se puede acceder y modificar en cualquier lugar (clase y objeto)
    //protected - se puede acceder / modificar solo desde la clase
    //private - solo miembros de la misma clase pueden acceder

    public function __construct(protected string $nombre, public int $precio, public bool $disponible) //para el constructor en php siempre empieza __ 
    {
    }

    public function mostrarProducto():void {
        echo "El Producto es: ". $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre():string {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}


$producto = new Producto('Tablet',200,true);

echo $producto->getNombre(); //para las funcines con return se necesita echo  para mostrar
echo $producto->setNombre("nuevoNombre"); //para las funcines con return se necesita echo  para mostrar

$producto2 = new Producto('Monitor Curvo', 300, true);
// echo "<pre>";
// var_dump($producto);
// echo "</pre>";

echo $producto2->getNombre();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";


include 'includes/footer.php';