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
				        <input type="date" name="fechaElaboracion"  required>
					</div>
				</div>

		    <label for="">Fase a trabajar</label>
	        <input type="text" name="fase" class="form-control col-md-2 col-md-offset-0" required>
		    <br>

	        <label for="">Actividad a realizar</label>
	        <textarea name="actividad" id="" cols="30" rows="6" class="form-control col-md-2 col-md-offset-0"></textarea>
		    <br>

	        <label for="">Responsable</label>
	        <input type="text" name="responsable" class="form-control col-md-2 col-md-offset-0" required>
		    <br>

	        <label for="">Resultado Esperado</label>
	        <textarea name="resultado" id="" cols="30" rows="4" class="form-control col-md-2 col-md-offset-0"></textarea>
		    <br>

	        <label for="">Fecha proyectada</label>
	        <input type="date" name="fechaProyectada" class="form-control col-md-2 col-md-offset-0" required>
		    <br>

		    <label for="">Fecha ejecutada</label>
	        <input type="date" name="fechaEjecutada" class="form-control col-md-2 col-md-offset-0" required>
		    <br>
				  
		    <label for="">Observaciones</label>
	        <textarea name="observaciones" class="form-control col-md-2 col-md-offset-0" id="" cols="30" rows="6"></textarea>
	        <br>
	        <br>
	        <br>
	        <br>
	        <br>
	        <br>  
	        <br>
	        <br>
	      	<input type="submit" name="" class=" btn btn-success" id="btn" value="Ingresar">
			<input type="reset" name="" class="btn btn-danger" id="btn1" value="Limpiar">


	     
				</form>
			</div>
	</div>
</div>
 	
<?php include '../templates/footer.inc';?>