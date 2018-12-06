 <!-- RESPONSIVE WITH SIDE MENU -->
 <header>
 <nav class="blue darken-4">
    <!--<div class="container">-->
      <div class="nav-wrapper">
        <a class="button-collapse show-on-large" data-activates="mobile-nav" href="#">
          <i class="material-icons">menu</i>
        </a>
        <a href="../inicio/index.php" class="brand-logo">
            <img  src="../img/Xiinbal.png" width="82">
        </a>
        <ul class="right hide-on-med-and-down">
          <!-- ICON LINK -->
          <li>
            <a class="btn waves-effect waves-light modal-trigger" href="#modal1">
              <i class="material-icons">person</i>
            </a>
          </li>
        </ul>
        <ul class="side-nav" id="mobile-nav">
          <li>
            <a href="../inicio/index.php">
              <i class="material-icons">home</i>
              Inicio
            </a>
          </li>
          <li>
            <a href="../inicio/add_casa.php">
            <i class="material-icons">add</i>    
            Agrega casa</a>
          </li>
          <li>
            <a href="../inicio/admin_casa.php">
            <i class="material-icons">developer_board</i>    
            Administra tus casas</a>
          </li>
          <li>
            <a class="btn waves-effect waves-light modal-trigger" href="#modal1">
              <i class="material-icons">person</i>
              Usuario
            </a>
          </li>
        </ul>
      </div>
    <!--</div>-->
  </nav>
</header>

 <?php
 if(!isset($_SESSION['nombre'])){
  include 'modal_Sesion.php';
 }else{
   include 'modal_user.php';
 }
 include 'modal_val.php';
 
 ?>
