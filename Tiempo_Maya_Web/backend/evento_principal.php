<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['rango'] == "ADMIN" && isset($_POST['descH'])) {
  include_once '../conexion.php';
  $query = "INSERT INTO hechohistorico (fechaInicio, fechaFinalizacion, titulo, descripcion)";
  $query .= " VALUES ('".$_POST['inputFInicial']."', '".$_POST['inputFFinal']."', '".$_POST['inputTituloH']."', '".$_POST['descH']."') ";
  echo $query;
  if($conexion->query($query)){
    $query3= $conexion->query("SELECT MAX(id) AS id FROM hechohistorico");
    $id;
    foreach ($query3 as $maxid) {
      $id = $maxid['id'];
      echo $id;
    }
    $revisar = getimagesize($_FILES["inputImage"]["tmp_name"]);
    $query2;
    if($revisar !== false) {
      $image = $_FILES['inputImage']['tmp_name'];
      $imgContenido = addslashes(file_get_contents($image));
      $query2 = "INSERT INTO subHechoHistorico (idHecho, fecha, titulo, texto, urlImagen) VALUES ";
      $query2 .= "(".$id.", '".$_POST['inputFecha']."', '".$_POST['inputTituloS']."', '".$_POST['textoS']."','$imgContenido')";
    } else {
      $query2 = "INSERT INTO subHechoHistorico (idHecho, fecha, titulo, texto) VALUES ";
      $query2 .= "(".$id.", '".$_POST['inputFecha']."', '".$_POST['inputTituloS']."', '".$_POST['textoS']."')";
    }
    if(!$conexion->query($query2)){
      $conexion->query("DELETE FROM hechohistorico WHERE id=".$id);
    }
  }
}
header("Location: ./../LineaDeTiempo.php");
 ?>
