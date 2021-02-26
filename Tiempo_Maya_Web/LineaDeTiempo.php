<?php
session_start();

//$conexion = new mysqli("servidor","usuario","clave","bd")
$conexion = new mysqli("localhost", "administrador", "Admin.123321", "LineaTiempo");
/*$sql =  "SELECT * FROM (";
$sql .= "  SELECT MAX(fecha) as fecha, idHechoHistorico as id ";
$sql .= "  FROM Edicion ";
$sql .= "  GROUP BY Edicion.idHechoHistorico ";
$sql .= ") a";
$sql .= "GROUP BY a.id";
*/
$sql = "CALL mostrarHechos";
$resultado = $conexion->query($sql);
$numfilas = $resultado->num_rows;
echo $numfilas;
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/LineaTiempo.css">
      <link rel="stylesheet" href="css/style.css" >
  </head>
  <body translate="no">
      <div>
          <header id="header" style="background-color: #1C1C1C;">
              <?php include 'BarradeNavegacion.php'; ?>>
          </header>
      </div>
      <div class="container">
        <!-- # component starts -->
          <div class="pres-timeline" id="this-timeline">
        <!-- ###   -->
        <!--   <div class="periods-section"> -->
            <div class="periods-container">
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A tempora blanditiis ut voluptas nisi labore quos iste totam obcaecati modi rerum iusto, voluptate odio commodi ratione amet illum dicta accusamus, ipsum ea vero neque enim, recusandae dignissimos? Quae ea aspernatur dolor atque, ipsum repellendus. Repudiandae culpa magnam, doloribus exercitationem illo impedit quasi officia, veniam vero molestiae sunt dolorem, excepturi ullam dicta sed amet provident ut soluta pariatur magni! Fugiat eveniet suscipit praesentium culpa aperiam ab nulla, exercitationem atque quod, labore, qui quaerat nihil nam laborum aliquam! Nesciunt dignissimos eaque impedit ex, architecto minima ad, temporibus rem possimus consequatur doloremque, fuga?</p>
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
            </div>
        <!--   </div> -->
        <!-- ###   -->
          </div>
        <!-- # component ends -->
      </div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script id="rendered-js" src="js/lineaTiempo.js" ></script>
  </body>

</html>
