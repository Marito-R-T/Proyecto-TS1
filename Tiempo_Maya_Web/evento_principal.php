<?php
session_start();
include_once 'conexion.php';
$sql = "SELECT * FROM hechohistorico;";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
      <title>Linea de Tiempo</title>
      <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css" >
  </head>
  <body>
      <div>
          <header id="header" style="background-color: #1C1C1C;">
              <?php include 'BarradeNavegacion.php'; ?>>
          </header>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="container">
        <form class="" action="backend/evento_principal.php" method="post">
          <hr style="width:75%;">
          <h3>
            <span id="definir_hecho">Hecho</span>
          </h3>
          <hr style="width:75%;">
          <div class="input-group mb-3">
            <span class="input-group-text">Fecha Inicio</span>
            <input type="date" class="form-control" name="inputFInicial" id="inputFIncial" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Fecha Final</span>
            <input type="date" class="form-control" name="inputFFinal" id="inputFFinal" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Titulo</span>
            <input type="text" class="form-control" name="inputTituloH" id="inputTituloH" required>
          </div>
          <div class="input-group">
            <span class="input-group-text">Descripcion</span>
            <textarea class="form-control" aria-label="With textarea" name="descH" id="descH" required></textarea>
          </div>
          <hr style="width:75%;">
          <h3>
            <span id="definir_sub_hecho">Primer Sub Hecho</span>
          </h3>
          <hr style="width:75%;">
          <div class="input-group mb-3">
            <span class="input-group-text">Fecha</span>
            <input type="date" class="form-control" name="inputFecha" id="inputFecha" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Titulo</span>
            <input type="text" class="form-control" name="inputTituloS" id="inputTituloS" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Texto</span>
            <textarea class="form-control" aria-label="With textarea" name="textoS" id="textoS" required></textarea>
          </div>
          <!--<div class="input-group mb-3">
            <label class="input-group-text" for="inputImage">Imagen</label>
            <input type="file" class="form-control" name="inputImage" id="inputImage" accept="image/*">
          </div>-->
          <div class="d-grid gap-2">
            <button class="btn btn-outline-success" type="submit">Agregar</button>
          </div>
        </form>
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
