<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php session_start(); ?>

	<?php 
  		$con = mysqli_connect('localhost','root','','proyectocomunicacion');
        if(mysqli_connect_errno()){
        echo "No se pudo conectar a la BD".mysqli_error();
      }

	 ?>
</head>
<body>
	<h1>Bienvenido</h1>
	
</body>
</html>