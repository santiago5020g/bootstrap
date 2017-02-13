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
			<div class="col-md-8 col-md-offset-2">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="imgcontrolit/Banner.png" alt="...">
							<div class="carousel-caption">
								<h3>
									Mas informacion
								</h3>
								<p>
									Tel 555 555 555
								</p>
							</div>
						</div>
						<div class="item">
							<img src="imgcontrolit/Banner2.png" alt="...">
							<div class="carousel-caption">
								<p>
									Backup
								</p>
							</div>
						</div>
						<div class="item">
							<img src="imgcontrolit/Banner3.png" alt="...">
							<div class="carousel-caption">
								<p>
									Virtualizacion
								</p>
							</div>
						</div>
						<div class="item">
							<img src="imgcontrolit/Banner4.png" alt="...">
							<div class="carousel-caption">
								<p>
									Cloud
								</p>
							</div>
						</div>
						<div class="item">
							<img src="imgcontrolit/Banner5.png" alt="...">
							<div class="carousel-caption">
								Seguridad
							</div>
						</div>
						...
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<article class="col-md-3">
				<h3>
				 <a href="backup.php">Backup</a>	
				</h3>
				<p>
					Recuperación de sistemas completa y basada en disco para servidores, equipos de escritorio y portátiles basados en Microsoft® Windows®.
				</p>
				<img src="imgcontrolit/backup.png" style="height:263px" class="img-responsive" alt="">
			</article>
			<article class="col-md-3">
				<h3>
					<a href="">Virtualizacion</a> 
				</h3>
				<p>
					Responda a las necesidades del mercado en cualquier instante y reduzca los gastos de capital
				</p>
				<img src="imgcontrolit/virtualizacion.png" style="height:263px" class="img-responsive" alt="">
			</article>
			<article class="col-md-3">
				<h3>
					<a href="">Seguridad</a> 
				</h3>
				<p>
					protección y administración de la información sin necesidad de administrar hardware y software en las instalaciones.
				</p>
				<img src="imgcontrolit/seguridad.png" style="height:263px" class="img-responsive" alt="">
			</article>
			<article class="col-md-3">
				<h3>
					<a href="">Cloud</a>
				</h3>
				<p>
					portabilidad para adaptarse a sus necesidades y sacar el mayor provecho de los procesos de su negocio.
				</p>
				<img src="imgcontrolit/cloud.png" style="height:263px" class="img-responsive" alt="">
			</article>
		</div>
		
		<div class="row">
			<div class="col-md-3 hidden-sm hidden-xs">
				<a href="backup.php" class="btn btn-primary">Mas informacion</a>
			</div>
			<div class="col-md-3 hidden-sm hidden-xs">
				<a href="virtualizacion.php" class="btn btn-primary">Mas informacion</a>
			</div>
			<div class="col-md-3  hidden-sm hidden-xs">
				<a href="seguridad.php" class="btn btn-primary">Mas informacion</a>
			</div>
			<div class="col-md-3 hidden-sm hidden-xs">
				<a href="cloud.php" class="btn btn-primary">Mas informacion</a>
			</div>
		</div>

	</div>



	<?php include('footer.php'); ?>


	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/dhover.js"></script>
</body>
</html>