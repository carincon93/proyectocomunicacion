<?php 
	include '../config/app.php';
	include '../templates/header.inc';
	include '../config/conexion.php';

 ?>
	<div class="container-fluid dashboard">
		<div class="row">
			<div class="col-md-12 ">
		      	<h4 class="text-uppercase">SERVICIO NACIONAL DE APRENDIZAJE SENA</h4>
		      	<hr>
		      	<form method="POST" enctype="multipart/form-data">
			        <div>
			          <label>PROGRAMA DE FORMACIÓN:</label>
			          <input type="text" name="programa_formacion" data-validation="required">
			        </div>
			        <div>
			          	<label>REGIONAL:</label>
			          	<input type="text" name="regional" data-validation="required">
			        </div>
			        <div>
			          <label>CENTRO DE FORMACIÓN: </label>
			          <input type="text" name="centro_formacion" data-validation="required">
			        </div>  
			        <br><br>
			        <div class="row">
			        	
				        	<div class="col-md-2">
						          <label>REGIONAL-CENTRO DE FORMACIÓN</label>
						          <input type="text" name="regional_centro"  data-validation="required">
				        	</div>
				        	<div class="col-md-2">
						          <label>NOMBRE DEL GRUPO</label>
						          <input type="text" name="nombre_grupo"  data-validation="required">
				        	</div>
					        <div class="col-md-2">
					          <label>AREA DE INVESTIGACIÓN</label>
					          <input type="text" name="area_investigacion"  data-validation="required">
					        </div>
					        <div class="col-md-2">
					          <label>LÍNEAS DE INVESTIGACIÓN</label>
					          <input type="text" name="lineas_investigacion"  data-validation="required">
					        </div>
					        <div class="col-md-2">
					          <label>INVESTIGADOR PRINCIPAL</label>
					          <input type="text" name="investigador_principal"  data-validation="required">
					        </div>
					        <div class="col-md-2">
					          <label>CÓDIGO Y CATEGORIA EN COLCIENCIAS </label>
					          <input type="text" name="codigo_categoria"  data-validation="required">
					        </div>
			        </div>
			        <br><br>
				    <button type="submit" class="btn btn-success">Enviar</button>
				    <button type="reset" class="btn btn-info">Borrar</button>
				    <a class="btn btn-primary" href="index.php">Volver</a>
			      </form>
		    </div>
		</div>
	</div>
<?php 
	if ($_POST) {
	    $programa_formacion =$_POST["programa_formacion"];
	    $regional = $_POST["regional"];
	    $centro_formacion = $_POST["centro_formacion"];
	    $regional_centro = $_POST["regional_centro"];
	    $nombre_grupo = $_POST["nombre_grupo"];
	    $area_investigacion = $_POST["area_investigacion"];
	    $lineas_investigacion = $_POST["lineas_investigacion"];
	    $investigador_principal = $_POST["investigador_principal"];
	    $codigo_categoria = $_POST["codigo_categoria"];



	    if ($programa_formacion != '' && $regional != '' && $centro_formacion != '' && $regional_centro != '' && $nombre_grupo != '' && $area_investigacion != '' && $lineas_investigacion != '' && $investigador_principal != '' && $codigo_categoria != '') {
	    
	      $sql = "INSERT INTO investigacion VALUES ('',
	      '$programa_formacion', 
	      '$regional', 
	      '$centro_formacion', 
	      '$regional_centro', 
	      '$nombre_grupo', 
	      '$area_investigacion', 
	      '$lineas_investigacion', 
	      '$investigador_principal', 
	      '$codigo_categoria')";

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