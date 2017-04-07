<?php 		
			$region = $_POST['region'];
			$correo = $_POST['correo'];
			$pass = $_POST['pass'];
			$con = mysqli_connect('localhost','root','','proyectocomunicacion');
 			$sql = "SELECT region FROM usuarios WHERE correo = '$correo' AND region = '$region' AND pass = '$pass'";
			$query = mysqli_query($con, $sql);
 			if(mysqli_num_rows($query) > 0){
 				$row = mysqli_fetch_array($query);
 				$_SESSION['region'] = $row['region']." ".$row['region']; 		
 				header("location: dashboard.php");		
 			}else {
 				echo "<script>
 					alert('Email o Contraseña Incorrectos');
 					window.location.replace('index.php');
 				</script>";
			}
 ?>