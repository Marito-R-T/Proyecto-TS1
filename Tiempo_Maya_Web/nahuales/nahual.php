<?php
  $conexion2 = new mysqli("localhost", "root", "Mario26Moises.", "CALENDARIO_MAYA");
 ?>
<div>
  <h3 class="section-title" style="  color: #2dc997;"><?php echo $nahual['nombre'];?> <?php if (isset($_GET['nivel']) && ($_GET['nahual'] == $nahual['id'])) {
    echo "Nivel ". $_GET['nivel'];
  } ?></h3>
  <hr>
  <p>
    <strong>Características:</strong>
  </p>
  <?php
    $caracteristicas = "SELECT * FROM caracteristicaNahual WHERE idNahual = " . $nahual['id'] . ";";
    $resCaracteristicas = $conexion->query($caracteristicas);
    foreach ($resCaracteristicas as $caracteristica) {?>
    <p><?php echo $caracteristica['caracteristica']; ?></p>
  <?php } ?>
  <p>
    <strong>Significado:</strong>
  </p>
  <ul>
    <?php
    $significados = "SELECT * FROM significado WHERE idNahual = ". $nahual['id'] . ";";
    $resSignificados = $conexion->query($significados);
    foreach ($resSignificados as $significado) {?>
      <li><?php echo $significado['significado']; ?></li>
    <?php } ?>
  </ul>
  <p><strong>Su origen:</strong> Ajmaq <strong>destino:</strong> E</p>
  <p>
    <strong>Fortalezas:</strong>
  </p>
  <ul>
    <?php
    $fortalezas = "SELECT * FROM fortaleza WHERE idNahual = " . $nahual['id'] . ";";
    $resFortalezas = $conexion->query($fortalezas);
    foreach ($resFortalezas as $fortaleza) {?>
      <li><?php echo $fortaleza['fortaleza']; ?></li>
    <?php } ?>
  </ul>
  <p>
    <strong>Debilidades:</strong>
  </p>
  <ul>
    <?php
    $debilidades = "SELECT * FROM debilidad WHERE idNahual = ". $nahual['id'] . ";";
    $resDebilidades = $conexion->query($debilidades);
    foreach ($resDebilidades as $debilidad) {?>
      <li><?php echo $debilidad['debilidad']; ?></li>
    <?php } ?>
  </ul>
</div>
