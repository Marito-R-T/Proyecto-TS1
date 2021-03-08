<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['rango'] == "ADMIN" && isset($_POST['idHecho'])) {
  include_once '../conexion.php';
  $query = "SELECT idSubHecho FROM subHechoHistorico WHERE idHecho = ".$_POST['idHecho'];
  echo $query;
  $result = $conexion->query($query);
  if($result->num_rows > 1){
    $query = "DELETE FROM subHechoHistorico WHERE idSubHecho=".$_POST['idSub'];
    $conexion->query($query);
  }
}
header("Location: ./../LineaDeTiempo.php");
 ?>
