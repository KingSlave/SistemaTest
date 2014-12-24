<?php 
session_start();
if(!isset($_SESSION['admitido']) && $_SESSION['admitido']!='si'){
header("Location: login.php");
die("Login");
}
?>
<div class="row">
<div class="large-2 large-centered columns">
<img src="img/logo.png" alt="Logotipo">  
</div>
<div class="large-8 large-centered columns">
<h1>Sistema de examenes en linea</h1>	
</div>
</div>

  <nav class="top-bar" data-topbar data-options="back_text: Regresar">
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">Test online</a></h1>
      </li>      
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">      
      <li class="has-dropdown not-click">
        <a href="#">Examenes</a>
        <ul class="dropdown">
          <li>        
          <a href="crearExamen.php">Crear</a></li>
          <li><a href="conExamen.php">Consultar</a></li>
        </ul>
      </li>
      <li class="has-dropdown not-click">
        <a href="#">Usuarios</a>
        <ul class="dropdown">
          <li><a href="regUsuario.php">Registrar</a></li>
          <li><a href="conUsuario.php">Consultar</a></li>
        </ul>
      </li>
    </ul>
    <!-- Left Nav Section -->
    <ul class="left">
      <li class="active"><a href="login.php?res=2">Cerrar sesion</a></li>
    </ul>
  </section>
</nav>


