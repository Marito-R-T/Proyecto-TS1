<?php
  $conexion;
  include_once 'conexion.php';
  $query = "SELECT * FROM nahual;";
  $resultado = $conexion->query($query);
  foreach ($resultado as $nahual) :?>
    <section id="nahual<?php echo $nahual['id']; ?>">
        <?php include "nahuales/nahual.php" ?>
    </section>
  <?php
  endforeach;
 ?>
