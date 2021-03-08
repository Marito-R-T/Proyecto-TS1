<?php
session_start();
// Obtengo los datos cargados en el formulario de registrarse.
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$username = $_POST['username'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$email = $_POST['email'];
$usuarioAntiguo = $_POST['usuarioAntiguo'];
  // Datos para conectar a la base de datos.
include_once '../conexion.php';
$query;
if(isset($telefono)){
  $query = "UPDATE usuario SET username='".$username."', password='".$password."', email='".$email."', nombre='".$nombre."', ";
  $query .= "apellido='".$apellido."', telefono='".$telefono."' WHERE username='".$usuarioAntiguo."'";
} else {
  $query = "UPDATE usuario SET username='".$username."', password='".$password."', email='".$email."', nombre='".$nombre."', ";
  $query .= "apellido='".$apellido."' WHERE username='".$usuarioAntiguo."'";
}
if($conexion->query($query)) {
//agregar valores a sesion
  $_SESSION['username'] = $username;
  $_SESSION['nombre'] = $nombre;
}
//header("Location: ./../perfil.php");
 ?>
