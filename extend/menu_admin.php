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
            <a href="../inicio/list_user.php">
              <i class="material-icons">contacts</i>
              Lista de usuarios
            </a>
          </li>
          <li>
            <a href="../inicio/list_prop.php">
              <i class="material-icons">assignment_ind</i>
              Lista de Propietarios
            </a>
          </li>
          <li>
            <a href="../inicio/list_admin.php">
              <i class="material-icons">supervisor_account</i>
              Lista de Administradores
            </a>
          </li>
          <li>
            <a href="../inicio/list_casas.php">
            <i class="material-icons">list</i>    
            lista de casas</a>
          </li>
          <li>
            <a href="../inicio/add_casa.php">
            <i class="material-icons">add</i>    
            Agrega casa</a>
          </li>
          <li>
            <a href="../inicio/admin.php">
            <i class="material-icons">assessment</i>    
            Administrar</a>
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
          <li>
            <a class="btn waves-effect waves-light modal-trigger" href="#modal_valoracion">
              <i class="material-icons">chat</i>
              Valoracion
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
