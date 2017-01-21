<?php
session_start();
include 'serv.php';
if(isset($_SESSION['user'])){
	echo '<script>window.location="inicio.php"; </script>';
}

?>

<!DOCTYPE >
<html>
	<head>
	<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
			<meta name="viewport" content ="width=device-width, initial-scale=1.0">
			<title>Bienvenido....</title>
			<script src="js/jquery-1.9.1.js"></script>
			<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	</head>
	
	<body>
		
		<div class="container">
			
			<div class="cuadro_contenido">
				<section>
					<table border="0" align="center" cellpadding="20">
						<form role="form" method="post" action="validar.php">
						<tr>
							<td>
								<input type="text" class="from-control" name="user" placeholder="Usuario" required><br><br>
							</td>
						</tr>
						<tr>
							<td><input type="password" class="from-control" name="pw" placeholder="Introduce su contraseña" required><br><br></td>
						</tr>
						<tr>
							<td>
							<input type="submit" class="btn btn-default btn-block btn-lg" name="login" value="Entrar">	
							</td>
						</tr>
						
					</table>
				</form>
				</section>
			</div>
		</div>
		
		
		  
		  	
		   
	         
			
		
	</body>
				