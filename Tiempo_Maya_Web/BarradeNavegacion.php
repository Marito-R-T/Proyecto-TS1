<?php
    session_start();
?>

<header id="header">
  <div class="container">
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active">  <a href="index.php" style="color: white;font-size: 23px;"><strong>TIEMPO</strong> MAYA</a></li>
        <li><a href="LineaDeTiempo.php">Linea del Tiempo</a></li>
        <li><a href="CalendarioHaab.php">Calendario Haab</a></li>
        <li><a href="CalendarioCholqij.php">Calendario Cholquij</a></li>
        <li><a href="rueda_calendarica.php">Rueda Calendarica</a></li>
        <li><a href="CalendarioCholqij.php#nahuales">Nahuales</a></li>
        <?php if (isset($_SESSION['nombre'])) { ?>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
        <?php } else { ?>
            <li><a href="iniciarSesion.php">Iniciar Sesion</a></li>
        <?php } ?>
      </ul>
    </nav>
  </div>
</header>
