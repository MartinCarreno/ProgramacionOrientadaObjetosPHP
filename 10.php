<?php include 'includes/header.php';

//Conectar a la BD con PDO (PHP Data Objects) (PDO Soporta mas de 12 bases de datos)

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root','admin');

//query

$query="SELECT titulo, imagen from propiedades";

//consultar la DB

$stmt = $db->prepare($query);

$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); //de esta forma solo nos traemos los titulos, no la posicion


foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";

endforeach;


// $propiedades = $db->query($query)->fetch();
// echo "<pre>";
//     var_dump($resultado);
// echo "</pre>";



include 'includes/footer.php';