<?php
session_start();
require_once('conexion.php');
if(isset($_SESSION['user']))
{

#El usuario accedio correctamente
$nombre =$_SESSION['user']['usuario'];
$privilegio = $_SESSION['user']['privilegio'];
$EMPRE = $_SESSION['user']['Empresa'];
$telef = $_SESSION['user']['telefono'];



#Consultar foto
require_once('php/consulta/consultafoto.php');


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
<style media="screen">
.boxContenedor
{
width:300px;
height:405px;
overflow:scroll;
padding-top: 30px; 
}
</style>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				UNTOKE <i class="zmdi  btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../imagenesUsuario/<?php echo $foto; ?>" alt="UserIcon">
					<figcaption class="text-center text-titles"><strong><?php echo $EMPRE ?></strong></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!" class="btn-modal-help">
							<i class="zmdi zmdi-help-outline"></i>
						</a>
					</li>
					<li>
						<a href="cerrar" class="zmdi zmdi-power"></a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<?php
				if($privilegio=="Administrador"){
				?>
				<li>
					<a href="home">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<?php
				}
				?>
				<?php
				if($privilegio=="Empresa"){
				?>
				<li>
					<a href="ReportePedidos">
						<i class="zmdi zmdi-local-shipping zmdi-hc-fw"></i> <font face="Arial">Mis Pedidos</font>
					</a>
				</li>
				<li>
					<!--<a href="ReporteProducto">
						<i class="zmdi zmdi-shopping-cart-add zmdi-hc-fw"> </i><font face="Arial"> Mis Productos</font>
					</a>-->
				</li>
				<li>
					<a href="home">
						<i class="zmdi zmdi-trending-up zmdi-hc-fw"></i> <font face="Arial">Mis Estadisticas</font>
					</a>
				</li>
				<li>
					<a href="ReporteHistorial">
						<i class="zmdi zmdi-local-shipping zmdi-hc-fw"></i> <font face="Arial">Historial Pedidos</font>
					</a>
				</li>
				<?php
				}
				?>
				<?php
                 if($privilegio == 'Administrador'){
                 ?>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Reporte <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					
				  <li>
					  <a href="ReportePedidos"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>Pedidos</a>
				  </li>
					
					  <a href="ReporteHistorial"><i class="zmdi zmdi-city-alt zmdi-hc-fw"></i>Historial Pedidos</a>
				  </li>
				  <li>
					  <a href="ReporteUsuario"><i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i>Usuario</a>
				  </li>
				  <li>
					  <a href="ReporteProducto"><i class="zmdi zmdi-shopping-cart-add zmdi-hc-fw"></i>Producto</a>
				  </li>
					</ul>
				</li>

			       <li>
					   <a href="#" class="btn-sideBar-SubMenu">
						   <i class="zmdi zmdi-account-add zmdi-hc-fw"></i>Nuevo<i class="zmdi zmdi-caret-down pull-right"></i>
					   </a>
					   <ul class="list-unstyled full-box">
						   <li>
							   <a href="RegistroUsuario"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Usuario</a>
						   </li>
						   <li>
							   <a href="RegistroEmpresa"><i class="zmdi zmdi-city-alt zmdi-hc-fw"></i>Empresa</a>
						   </li>
					   </ul>
				   </li>                 
                   <?php
                 }else{
                   // Si no es administrador campo vasio
                 }
                 ?>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage" >
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#" class="btn-menu-dashboard"><i class="zmdi zmdi-menu"></i></a>
				</li>
				
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Usuarios Panel</h1>
			</div>
		</div>
		<div class="full-box text-center" style="background-color:#42B72A;">

				<article class="full-box tile" style="height:450px">
				<div class="full-box tile-title text-center text-titles text-uppercase">Online  Untoke</div><br>
				 <br>
				 <center>
				 <div class="boxContenedor">
	
				 </center>
				</div>
				</article>

		</div>
		
<!--container-->
	</section>

	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<!-- Dialog help -->
	<?php       
      require_once('view/help/help.php');
    ?>



</body>
</html>
<?php 

}
else {
	#MENSAJE DE ERROR AL INGRESAR
	header('Location: http://untokeperu.com');

}


 ?>