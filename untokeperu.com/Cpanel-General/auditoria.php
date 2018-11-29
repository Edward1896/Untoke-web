<?php
session_start();
if(isset($_SESSION['user']))
{
#El usuario accedio correctamente
$nombre =$_SESSION['user']['usuario'];
$privilegio = $_SESSION['user']['privilegio'];
$empresa = $_SESSION['user']['Empresa'];
require_once('conexion.php');
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
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!--ICONO DE LA PAGINA  WEB-->
	<link rel="icon" type="image/png" href="img/bag.png" />
</head>
<body>
	<!-- SideBar -->
	<?php include 'view/menu/menu.php' ?>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
			</ul>
		</nav>
	


<?php
if($privilegio == 'Administrador'){
/********************************************* */
	?>

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Tabla <small>Control de Usuario</small></h1>
			</div>		
        </div>

    <!--start table-->
<div class="container-fluid"> 
    <div class="table-responsive">
            <table class="table table-bordered table-hover" style="width:100%;" id="tablaEmpresa">
                <thead>
                <tr>
                	<th>Nro</th>
                	<th>Cuenta Usuario</th>
                    <th>Empresa</th>
                    <th>Fecha</th>
                    <th>Inicio Cession</th>
                    <th>Termino Cession</th>
                    <th>Actividad</th>
                </tr>
                </thead>
               	<tfoot>
               		<th>Nro</th>
               		<th>Cuenta Usuario</th>
                    <th>Empresa</th>
                    <th>Fecha</th>
                    <th>Inicio Cession</th>
                    <th>Termino Cession</th>
                    <th>Actividad</th>
               	</tfoot>
            </table>
    </div>   
</div>
</section>
<!--end table-->
	



	<?php
/****************************************** */
}else{

/***************************************** */
	?>
	<br><br><br>
	<div class="text-center">No tienes permisos</div>
	<?php

/****************************************** */
}

?>
	<!--====== Scripts -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/material.min.js"></script>
	<script src="js/ripples.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
    $(document).ready( function () { 
	   listar();
        } );

		var listar = function() {
			
            var table = $("#tablaEmpresa").DataTable({

				"destroy":true,
				"ajax":{
					"method":"POST",
					"url":"php/consulta/consultaAuditoria.php"
				},
				"columns":[
					{"data":"ID"},
					{"data":"codigo"},
					{"data":"empresa"},
					{"data":"fecha"},
					{"data":"hora_inicio"},
					{"data":"hora_final"},
					{"data":"tipo_transaccion"}
				],
				"language": idioma_espanol
			});
            
		}



		var idioma_espanol = {
		    "sProcessing":     "Procesando...",
		    "sLengthMenu":     "Mostrar _MENU_ registros",
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
		}

	</script>

	<!-- Dialog help -->
	<?php require_once('view/help/help.php'); ?>



</body>
</html>
<?php
}
else {
	#MENSAJE DE ERROR AL INGRESAR
	header('Location:http://untokeperu.com');

}

?>