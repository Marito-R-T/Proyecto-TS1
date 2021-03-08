<?php session_start();
  include_once 'conexion.php';
  $user;
  $nahual;
  $nivel;
  if(!isset($_SESSION['nombre'])){
    header("Location: index.php");
  } else {
    $query = "SELECT * FROM usuario WHERE username='".$_SESSION['username']."'";
    $resultado = $conexion->query($query);
    if($resultado->num_rows > 0) {
      $user = $resultado->fetch_assoc();
    }
    $fecha=$user['nacimiento'];
    include_once 'buscar/conseguir_nahual.php';
    include_once 'buscar/conseguir_energia.php';
    $r2 = $conexion->query("SELECT nombre FROM nahual WHERE id=".$query);
    if($r2->num_rows > 0) {
      $rnahual = $r2->fetch_assoc();
    }
    $nahual = $rnahual['nombre'];
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tiempo Maya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/Perfil.css" rel="stylesheet">
</head>

<body>
<?php include "BarradeNavegacion.php" ?>
<section id="inicio">
<div class="inicio-container">
  <div class="container" style="margin-top:150px; ">
  <div class="profile-env" style="background: rgba(0, 0, 0, 0.3);" >
      <header class="row">
          <div class="col-sm-2">
              <a href="#" class="profile-picture">
                  <img src="img/perfil.jpg" class="img-responsive img-circle"> </a>
          </div>
          <div class="col-sm-7">
              <ul class="profile-info-sections">
                  <li>
                      <div class="profile-name">
                          <strong>
                              <a href="#"><?php echo $user['nombre'] . " " . $user['apellido']; ?></a>
                              <a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
                          </strong>
                      </div>
                  </li>
                  <li>
                      <div class="profile-stat">
                          <h3 style="color: white;"><?php echo $nahual; ?></h3>
                          <span>
                              <a href="#">Nivel: <?php echo $nivel; ?></a>
                          </span>
                      </div>
                  </li>
                  <li>
                      <div class="profile-stat">
                          <h3 style="color: white;"><?php echo $user['username']; ?></h3>
                          <span>
                              <a href="#">username</a>
                          </span>
                      </div>
                  </li>
              </ul>
          </div>
      </header>
      <section class="profile-info-tabs">
          <div class="row">
              <div class="col-sm-offset-2 col-sm-10">
                  <ul class="user-details">
                      <li>

                              <i class="entypo-location"></i>
                            <strong>  <?php echo $user['email']; ?> </strong>

                      </li>
                      <li>

                              <i class="entypo-location"></i>
                              <?php echo $user['telefono']; ?>

                      </li>
                      <li>

                              <i class="entypo-location"></i>
                              <span style="color: black;"><?php
                                $r3 = $conexion->query("SELECT tipo FROM rol WHERE id=".$user['rol']);
                                if($r3->num_rows > 0) {
                                  $rol = $r3->fetch_assoc();
                                  echo $rol['tipo'];
                                }
                               ?></span>
                      </li>
                      <li>
                      </li>
                  </ul>
                  <ul class="nav nav-tabs">

                      <li>
                          <a href="editarPerfil.php">Editar Perfil</a>
                      </li>
                  </ul>
              </div>
          </div>
      </section>

  </div>
  </div>
</div>
</section>
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Teoria de Sistemas</strong>. Derechos Reservados
    </div>
  </div>
</footer>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
