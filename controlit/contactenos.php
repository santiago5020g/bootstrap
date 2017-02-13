<!DOCTYPE html>
<html lang="es">
<head>
	<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 26 Feb 1997 08:21:57 GMT">
	<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style1.css">
	

	
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">

</head>
<body>


	<?php include('header.php'); ?>


	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="margenb40">
					Contactenos
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form action="" class="form-horizontal">
					<div class="form-group">
						<div class="col-md-12">
							<input name="txtnombre" type="text" class="form-control" placeholder="Nombre">
						</div>	
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<input name="txtcorreo" type="text" class="form-control" placeholder="Correo">
						</div>	
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<input name="txttelefono" type="text" class="form-control" placeholder="Telefono">
						</div>	
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<textarea name="txtmensaje" placeholder="Mensaje" id=""  style="width:100%; height:200px"></textarea>
						</div>	
					</div>
					<button class="btn btn-primary">Enviar</button>
				</form>
			</div>
			<div class="col-md-6">
				<h2>
					Nuestra dirección
				</h2>
				<p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1694097126774!2d-75.605214!3d6.241391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44299bb4b35cc3%3A0xd8d44fa8ef7cf4d4!2sCarrera+82A+%23+34-22%2C+Medell%C3%ADn%2C+Antioquia%2C+Colombia!5e0!3m2!1ses!2s!4v1431018724818" width="90%" height="250px" frameborder="0" style="border:0"></iframe>
				</p>
			</div>
		</div>
		
		
	</div>
	<?php include('footer.php'); ?>
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/dhover.js"></script>
</body>
</html>