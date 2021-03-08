<?php
session_start();
// Obtengo los datos cargados en el formulario de registrarse.
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha = $_POST['fecha'];
$username = $_POST['username'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$email = $_POST['email'];
  // Datos para conectar a la base de datos.
include_once '../conexion.php';
$query;
if(isset($telefono)){
  $query = "INSERT INTO usuario (username, password, email, nombre, apellido, nacimiento, telefono, rol) VALUES ";
  $query .= "('".$username."','".$password."','".$email."','".$nombre."','".$apellido."','".$fecha."','".$telefono."',2)";
} else {
  $query = "INSERT INTO usuario (username, password, email, nombre, apellido, nacimiento, rol) VALUES ";
  $query .= "('".$username."','".$password."','".$email."','".$nombre."','".$apellido."','".$fecha."',2)";
}
echo $query;

if($conexion->query($query)) {
//agregar valores a sesion
  $_SESSION['username'] = $username;
  $_SESSION['nombre'] = $nombre;
  $_SESSION['rango'] = 2;
}
header("Location: ./../index.php");
 ?>
