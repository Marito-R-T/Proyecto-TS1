<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['rango'] == "ADMIN" && isset($_POST['idHecho'])) {
  include_once '../conexion.php';
  $query = "DELETE FROM hechohistorico WHERE id=".$_POST['idHecho'];
  $conexion->query($query);
}
header("Location: ./../LineaDeTiempo.php");
 ?>
