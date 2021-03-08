<?php
  include_once '../conexion.php';
  if (isset($_GET['id'])) {
    $result = $conexion->query("SELECT urlImagen FROM subHechoHistorico WHERE idSubHecho=".$_GET['id']);
    if($result->num_rows > 0) {
      $imgDatos = $result->fetch_assoc();
      //Mostrar Imagenes
      header("Content-type: image/jpg");
      echo $imgDatos['urlImagen'];
    } else {
      echo "Imagen no existe";
    }
  }
 ?>
