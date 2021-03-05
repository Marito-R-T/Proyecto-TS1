<?php
  include_once '../conexion.php';
  $query2 = "INSERT INTO subHechoHistorico (idHecho, fecha, titulo, texto) VALUES ";
  $query2 .= "(".$_POST['idHecho'].", '".$_POST['inputFecha']."', '".$_POST['inputTituloS']."', '".$_POST['textoS']."')";
  $conexion->query($query2);
  header("Location: http://localhost/Proyecto-TS1/Tiempo_Maya_Web/LineaDeTiempo.php");
 ?>
