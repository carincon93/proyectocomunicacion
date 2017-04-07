<?php 
	include '../config/app.php';
	include '../templates/header.inc';
	include '../config/conexion.php';

 ?>
<div class="container-fluid">
	<div class="row">
    	  <h1 class="text-center">Programacion de Asesorias</h1>
     	  <hr>
      	  <div class="col-md-12">

			 <form action="" method="POST" >
				<div class="row">
					<div class="col-md-6">
						
						<label>Emprendedor o Empresario</label>
					 	 <input type="text" name="nombre" required>

					 	 <br>
					 	 <label for="">Centro</label>
			      	 	 <input type="text" name="centro" required>
					  	 <br>

				      	 <label for="">Plan de Negocio o Empresa</label>
				     	 <input type="text" name="plan" required>
					     <br>
					</div>
					<div class="col-md-6">
				   	     <label for="">Gestor encargo</label>
				         <input type="text" name="gestor" required>
					 	 <br>

					 	 <label for="">Regional</label>
				         <input type="text" name="regional" required>
					 	 <br>
				    
				      	<label for="">Consecutivo</label>
				        <input type="text" name="consecutivo" required>
					    <br>
					</div>

				</div>
				<div class="row">
					
					<div class="col-md-2">
						
					 	<label>Fecha de elaboracion</label>
				        <input type="date" name="fecha_elaboracion"  required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<label >Fase a trabajar</label>
				        <input type="text" name="fase"  required>
					</div>
					<div class="col-md-2">
				        <label >Actividad a realizar</label>
				        <input type="text" name="actividad"></textarea>
					</div>
					<div class="col-md-2">
				        <label >Responsable</label>
				        <input type="text" name="responsable"  required>
					</div>
					<div class="col-md-2">
				
				        <label >Resultado Esperado</label>
				        <input type="text" name="resultado" ></textarea>
					</div>
					<div class="col-md-2">
				        <label >Fecha proyectada</label>
				        <input type="date" name="fecha_proyectada"  required>
					</div>
					<div class="col-md-2">
					    <label >Fecha ejecutada</label>
				        <input type="date" name="fecha_ejecutada"  required>
					</div>
					<div class="col-md-2">
					    <label >Observaciones</label>
				        <textarea name="observaciones"></textarea>
					</div>
				</div>
		    
	      	<input type="submit" name="" class=" btn btn-success" id="btn" value="Ingresar">
			<input type="reset" name="" class="btn btn-danger" id="btn1" value="Limpiar">


	     
				</form>
			</div>
	</div>
</div>
<?php 
	if ($_POST) {
	    $nombre =$_POST["nombre"];
	    $centro = $_POST["centro"];
	    $plan = $_POST["plan"];
	    $gestor = $_POST["gestor"];
	    $regional = $_POST["regional"];
	    $consecutivo = $_POST["consecutivo"];
	    $fecha_elaboracion = $_POST["fecha_elaboracion"];
	    $fase = $_POST["fase"];
	    $actividad = $_POST["actividad"];
	    $responsable = $_POST["responsable"];
	    $resultado = $_POST["resultado"];
	    $fecha_proyectada = $_POST["fecha_proyectada"];
	    $fecha_ejecutada = $_POST["fecha_ejecutada"];
	    $observaciones = $_POST["observaciones"];



	    if ($nombre != '' && $centro != '' && $plan != '' && $gestor != '' && $regional != '' && $consecutivo != '' && $fecha_elaboracion != '' && $fase != '' && $actividad != '' && $responsable != '' && $resultado != '' && $fecha_proyectada != '' && $fecha_ejecutada != '' && $observaciones != '') {
	    
	      $sql = "INSERT INTO form_asesorias VALUES ('',
	      '$nombre', 
	      '$centro', 
	      '$plan', 
	      '$gestor', 
	      '$regional', 
	      '$consecutivo', 
	      '$fecha_elaboracion', 
	      '$fase', 
	      '$actividad',
	      '$responsable', 
	      '$resultado', 
	      '$fecha_proyectada', 
	      '$fecha_ejecutada', 
	      '$observaciones')";

	      $row=mysqli_query($con,$sql);
                if ($row) {
                    echo "<script>alert('User registered successfully....');</script>";
                

            } else {
	          echo "<script>alert('Error al realizar la consulta!');</script>";
	      	}
	    }
	}
?>
<?php include '../templates/footer.inc';?>