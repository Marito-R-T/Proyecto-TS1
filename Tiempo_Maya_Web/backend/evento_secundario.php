<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['rango'] == "ADMIN" && isset($_POST['idHecho'])){
  include_once '../conexion.php';
  $revisar = getimagesize($_FILES["inputImage"]["tmp_name"]);
  if($revisar !== false) {
    $image = $_FILES['inputImage']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));
    $query = "INSERT INTO subHechoHistorico (idHecho, fecha, titulo, texto, urlImagen) VALUES ";
    $query .= "(".$_POST['idHecho'].", '".$_POST['inputFecha']."', '".$_POST['inputTituloS']."', '".$_POST['textoS']."','$imgContenido')";
    $conexion->query($query);
  } else {
    $query = "INSERT INTO subHechoHistorico (idHecho, fecha, titulo, texto) VALUES ";
    $query .= "(".$_POST['idHecho'].", '".$_POST['inputFecha']."', '".$_POST['inputTituloS']."', '".$_POST['textoS']."')";
    $conexion->query($query);
  }
}
header("Location: ./../LineaDeTiempo.php");
 ?>
