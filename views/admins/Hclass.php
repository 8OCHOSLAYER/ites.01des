<?php include '../partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ITESCHAMP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="../index.php">Principal</a></li>
            <?php if (!isset($_SESSION["usuario"])) {?>
            <li><a href="login.php">Login</a></li>
            <li><a href="registro.php">Registro</a></li>
            <?php } else {
    ?>
              <?php if ($_SESSION["usuario"]["privilegio"] == 1) {?>
              <li class="active"><a href="admins/horarios.php">Administrar Horarios</a></li>
                    <li><a href="../admin.php">Control General</a></li>
                    <li><a href="admin.php">Reportes</a></li>
                    <li><a href="admin.php">Subscripciones</a></li>
                    <li><a href="admin.php">return</a></li>
              <?php } else {?>
              <li><a href="usuario.php">Usuario</a></li>
            <?php }

}?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">

		</div>
	</div>
</div><!-- /.container -->
<?php include '../partials/footer.php';?>