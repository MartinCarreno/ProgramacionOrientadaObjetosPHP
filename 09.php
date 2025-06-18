<?php include 'includes/header.php';

// Conectar a la BD de MySql

$db = new mysqli('localhost', 'root', 'admin', 'bienesraices_crud');

//forma con stmt y prepare

//crear el query
$query = "SELECT titulo FROM propiedades";

//preparamos
$stmt = $db->prepare($query);

//Ejecutamos
$stmt->execute();

//se crea la variable
$stmt->bind_result($titulo);//se le asigna el nombre que queramos a la variable

//se asigna el resultado
$stmt->fetch();


//se imprime el resultado
var_dump($titulo);

// $resultado = $db->query($query);

// var_dump($resultado->fetch_assoc());

include 'includes/footer.php';