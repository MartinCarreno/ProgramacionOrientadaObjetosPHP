<?php 
declare(strict_types= 1); // para que detecte cuando uno pase un atributo que no es valido, Tiene que ir primero que todo
include 'includes/header.php';


// Metodos Estaticos

class Producto {

    public $imagen; //atributo

    public static $imagenPlaceholder = "Imagen.jpg"; //tambien se pueden crear atributos con public static, ademas con esto hacer que si no hay entrada del parametro lo agregue como default

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen) //si no coloco public hace que el parametro no sea obligatorio 
    {
        if ($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto() {
        return self::$imagenPlaceholder; //para instanciar el elemento se utiliza tambien ::, uno de los framework que ultiliza esto es en laravel
    }

    public static function obtenerProducto() {
        echo "Obteniendo Datos del Producto...";
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

// echo Producto::obtenerProducto(); //asi se llama a un metodo statico, primero nombre de la clase y luego el metodo


$producto = new Producto('Tablet',200,true, '');

echo $producto->obtenerImagenProducto();

echo $producto->getNombre(); //para las funcines con return se necesita echo  para mostrar
echo $producto->setNombre("nuevoNombre"); //para las funcines con return se necesita echo  para mostrar

$producto2 = new Producto('Monitor Curvo', 300, true, 'Monitor.jpg');
echo $producto2->obtenerImagenProducto();

echo $producto2->getNombre();


include 'includes/footer.php';