<?php
  include_once '../conexion.php';
  $conexion->autocommit(FALSE);
  $query = "INSERT INTO hechohistorico (fechaInicio, fechaFinalizacion, titulo, descripcion)";
  $query .= " VALUES ('".$_POST['inputFInicial']."', '".$_POST['inputFFinal']."', '".$_POST['inputTituloH']."', '".$_POST['descH']."') ";
  echo $query;
  if($conexion->query($query)){
    $id=mysql_insert_id();
    echo $id;
    $query2 = "INSERT INTO subHechoHistorico (idHecho, fecha, titulo, texto) VALUES ";
    $query2 .= "(".$id.", '".$_POST['inputFecha']."', '".$_POST['inputTituloS']."', '".$_POST['textoS']."')";
    echo $query2;
    if($conexion->query($query2)){
      $conexion->commit();
    } else {
      $conexion->rollback();
    }
  } else {
    $conexion->rollback();
  }
  $conexion->autocommit(TRUE);
 ?>
