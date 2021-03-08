<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/inicioSesion.css" >
    <title>Main</title>
</head>
<body>
    <style>
        .main-container{
            width: 35%;
            margin: 100px  auto;
            padding: 20px 20px 60px;
            -webkit-box-shadow: 13px 10px 5px -4px rgba(0,0,0,0.75);
            -moz-box-shadow: 13px 10px 5px -4px rgba(0,0,0,0.75);
            box-shadow: 13px 10px 5px -4px rgba(0,0,0,0.75);
            background: gray;
            color:white;
        }
        body{
        background: url("./img/fondo.png") ;
        background-size: cover;
        }
        .nav-menu > li > a:before {
        background-color: black;
        }
    </style>
    <div>
        <header id="header">
            <?php include 'BarradeNavegacion.php'; ?>>
        </header>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
      <div class="form">
        <ul class="tab-group">
          <li class="tab active"><a href="#login">Loguearse</a></li>
          <li class="tab"><a href="#signup">Registrarse</a></li>
        </ul>
        <div class="tab-content">
          <div id="login">
            <h1>Iniciar Sesion</h1>
            <form action="backend/inicioSesion.php" method="post">
              <div class="field-wrap">
                <label>
                  Username<span class="req">*</span>
                </label>
                <input type="text" name="user" required autocomplete="off"/>
              </div>
              <div class="field-wrap">
                <label>
                  Contraseña<span class="req">*</span>
                </label>
                <input type="password" name="password" required autocomplete="off"/>
              </div>
              <button class="button button-block"/>Loguearse</button>
            </form>
          </div>
          <div id="signup">
            <h1>Registrarse</h1>
            <form action="backend/registrarse.php" method="post">
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Nombre<span class="req">*</span>
                </label>
                <input type="text" name="nombre" required autocomplete="off" />
              </div>
              <div class="field-wrap">
                <label>
                  Apellido<span class="req">*</span>
                </label>
                <input type="text" name="apellido" required autocomplete="off"/>
              </div>
            </div>
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" name="username" required autocomplete="off"/>
            </div>
            <div class="field-wrap">
              <label>
                Email<span class="req">*</span>
              </label>
              <input type="email" name="email" required autocomplete="off"/>
            </div>
            <div class="field-wrap">
              <input type="date" name="fecha" required autocomplete="off"/>
            </div>
            <div class="field-wrap">
              <label>
                Telefono
              </label>
              <input type="text" name="telefono" autocomplete="off"/>
            </div>
            <div class="field-wrap">
              <label>
                Contraseña<span class="req">*</span>
              </label>
              <input type="password" name="password" required autocomplete="off"/>
            </div>
            <button type="submit" class="button button-block"/>Registrarse</button>
            </form>
          </div>
        </div><!-- tab-content -->
      </div> <!-- /form -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="js/inicioSesion.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
</body>
</html>
