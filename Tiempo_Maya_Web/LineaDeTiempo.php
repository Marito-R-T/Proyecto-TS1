<?php
session_start();

//$conexion = new mysqli("servidor","usuario","clave","bd")
include_once 'conexion.php';
/*$sql =  "SELECT * FROM (";
$sql .= "  SELECT MAX(fecha) as fecha, idHechoHistorico as id ";
$sql .= "  FROM Edicion ";
$sql .= "  GROUP BY Edicion.idHechoHistorico ";
$sql .= ") a";
$sql .= "GROUP BY a.id";
*/
$sql = "SELECT * FROM hechohistorico;";
$resultado = $conexion->query($sql);
$numfilas = $resultado->num_rows;
$idhecho = -1;
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
      <title>Linea de Tiempo</title>
      <meta charset="utf-8">
      <script>
      window.console = window.console || function(t) {};
      </script>
      <script>
      if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
      }
      </script>
      <!--
      <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
      <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
      <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
      <script type="text/javascript">  window.console = window.console || function(t) {}; </script>
      <script type="text/javascript">
        if (document.location.search.match(/type=embed/gi)) {
          window.parent.postMessage("resize", "*");
        }
      </script>
      -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="css/LineaTiempo.css">
      <link rel="stylesheet" href="css/style.css" >
  </head>
  <body translate="no">
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
      <br>
      <br>
      <div class="container">
        <!-- # component starts -->
          <div class="pres-timeline" id="this-timeline">
        <!-- ###   -->
        <!--   <div class="periods-section"> -->
            <div class="periods-container">
              <?php foreach ($resultado as $hecho) { ?>
                <section class="period-single" period="<?php echo "period" . $hecho['id']; ?>">
                  <h4 class="year"><?php echo $hecho['fechaInicio']; ?></h4>
                  <h2 class="title"><?php echo $hecho['titulo']; ?></h2>
                  <h3><?php echo $hecho['fechaInicio'] . " -> " . $hecho['fechaFinalizacion']; ?></h3>
                  <p><?php echo $hecho['descripcion']; ?></p>
                </section>
              <?php } ?>
              <!--
              <section class="period-single" period="period1">
                <h4 class="year">181x-181x</h4>
                <h2 class="title">1 Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium doloremque, laboriosam officia facere eligendi quam reiciendis, rem explicabo dolores tenetur libero minus, facilis quibusdam. Consectetur amet beatae fuga, architecto magnam.</p>
              </section>
              <section class="period-single" period="period2">
                <h4 class="year">182x-182x</h4>
                <h2 class="title">2 Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium doloremque, laboriosam officia facere eligendi quam reiciendis, rem explicabo dolores tenetur libero minus, facilis quibusdam. Consectetur amet beatae fuga, architecto magnam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium doloremque, laboriosam officia facere eligendi quam reiciendis, rem explicabo dolores tenetur libero minus, facilis quibusdam. Consectetur amet beatae fuga, architecto magnam.</p>
              </section>
              <section class="period-single" period="period3">
                <h4 class="year">183x-183x</h4>
                <h2 class="title">3 Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium doloremque, laboriosam officia facere eligendi quam reiciendis, rem explicabo dolores tenetur libero minus, facilis quibusdam. Consectetur amet beatae fuga, architecto magnam.</p>
              </section>
              -->
              <div class="btn-back"></div>
              <div class="btn-next"></div>
            </div>
        <!--   </div> -->
        <!-- ### -->
        <!--   <div class="timeline-section"> -->
            <div class="timeline-container">
              <!--     # timeline graphic place holder - fill with js -->
              <div class="timeline"></div>

              <div class="btn-back"><svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h30v30H0z"/><path fill="#D8D8D8" fill-rule="evenodd" d="M11.828 15l7.89-7.89-2.83-2.828L6.283 14.89l.11.11-.11.11L16.89 25.72l2.828-2.83"/></svg></div>
              <div class="btn-next"><svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h30v30H0z"/><path fill="#D8D8D8" fill-rule="evenodd" d="M18.172 14.718l-7.89-7.89L13.112 4l10.606 10.607-.11.11.11.11-10.608 10.61-2.828-2.83 7.89-7.89"/></svg></div>
            </div>
        <!--   </div> -->
        <!-- ### -->
        <!--   <div class="cards-section"> -->
            <div class="cards-container">
              <?php foreach ($resultado as $hecho) {
                $subHecho = "SELECT * FROM subHechoHistorico WHERE idHecho=".$hecho['idHecho'];
                $resultado2 = $conexion->query($subHecho);
                foreach ($resultado2 as $sub) { ?>
                <section class="card-single" period="<?php echo "period".$hecho['id']; ?>">
                  <h4 class="year"><?php echo $sub['fecha']; ?></h4>
                  <h2 class="title"><?php echo $sub['titulo']; ?></h2>
                  <div class="content">
                    <?php if (!is_null($sub['urlImagen'])):
                      header("Content-type: image/jpg");
                      echo $sub['urlImagen'];
                       endif; ?>
                    <p><?php echo $sub['texto']; ?></p>
                  </div>
                </section>
              <?php } } ?>
              <!--
              <section class="card-single active" period="period1">
                <h4 class="year">1816</h4>
                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                <div class="content">
                  <img src="https://ununsplash.imgix.net/photo-1421284621639-884f4129b61d?fit=crop&fm=jpg&h=700&q=75&w=1050" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore vitae sint dolore, officia esse! A recusandae nemo illum rem eos iusto repellendus, voluptatibus tempora nulla voluptatem officia inventore ea modi.</p>
                </div>
              </section>
              <section class="card-single" period="period1">
                <h4 class="year">1816</h4>
                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                <div class="content">
                  <img src="https://ununsplash.imgix.net/photo-1421284621639-884f4129b61d?fit=crop&fm=jpg&h=700&q=75&w=1050" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore vitae sint dolore, officia esse! A recusandae nemo illum rem eos iusto repellendus, voluptatibus tempora nulla voluptatem officia inventore ea modi.</p>
                </div>
              </section>
              <section class="card-single" period="period2">
                <h4 class="year">1816</h4>
                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                <div class="content">
                  <p>pariatur magni! Fugiat eveniet suscipit praesentium culpa aperiam ab nulla, exercitationem atque quod, labore, qui quaerat nihil nam laborum aliquam! Nesciunt dignissimos eaque impedit ex, architecto minima ad, temporibus rem possimus consequatur doloremque, fuga?</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore vitae sint dolore, officia esse! A recusandae nemo illum rem eos iusto repellendus, voluptatibus tempora nulla voluptatem officia inventore ea modi.</p>
                </div>
              </section>
              <section class="card-single" period="period1">
                <h4 class="year">1816</h4>
                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore vitae sint dolore, officia esse! A recusandae nemo illum rem eos iusto repellendus, voluptatibus tempora nulla voluptatem officia inventore ea modi.</p>
                </div>
              </section>
              <section class="card-single" period="period3">
                <h4 class="year">1816</h4>
                <h2 class="title">Lorem ipsum dolor sit amet.</h2>
                <div class="content">
                  <img src="https://ununsplash.imgix.net/photo-1421284621639-884f4129b61d?fit=crop&fm=jpg&h=700&q=75&w=1050" alt="" />
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore vitae sint dolore, officia esse! A recusandae nemo illum rem eos iusto repellendus, voluptatibus tempora nulla voluptatem officia inventore ea modi.</p>
                </div>
              </section>
            -->
            </div>
        <!--   </div> -->
        <!-- ###   -->
          </div>
        <!-- # component ends -->
      </div>
      <div class="container">
        <div class="d-flex bd-highlight">
          <div class="p-2 flex-fill bd-highlight">
            <form class="" action="evento_principal.php" method="post">
              <div class="d-grid gap-2">
                <button class="btn btn-outline-secondary" type="submit">Agregar Evento Principal</button>
              </div>
            </form>
          </div>
          <div class="p-2 flex-fill bd-highlight">
            <form class="" action="evento_secundario.php" method="post">
              <div class="d-grid gap-2">
                <button class="btn btn-outline-secondary" type="submit">Agregar Evento Secundario</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script id="rendered-js" src="js/lineaTiempo.js" ></script>
  </body>

</html>
