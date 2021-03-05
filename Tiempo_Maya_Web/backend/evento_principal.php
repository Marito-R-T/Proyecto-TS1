<?php
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
    $query2 = "INSERT INTO subHechoHistorico (idHecho, fecha, titulo, texto) VALUES ";
    $query2 .= "(".$id.", '".$_POST['inputFecha']."', '".$_POST['inputTituloS']."', '".$_POST['textoS']."')";
    echo $query2;
    if(!$conexion->query($query2)){
      $conexion->query("DELETE FROM hechohistorico WHERE id=".$id);
    }
  }
  header("../LineaDeTiempo.php");
 ?>
