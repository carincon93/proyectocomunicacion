<?php 
	include '../templates/header.inc';

 ?>
	<div class="container-fluid dashboard">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
		      	<h4 class="text-uppercase">SERVICIO NACIONAL DE APRENDIZAJE SENA</h4>
		      	<hr>
		      	<form method="POST" enctype="multipart/form-data">
			        <div>
			          <label>PROGRAMA DE FORMACIÓN:</label>
			          <input type="text" name="programa_formacion" class="form-control" data-validation="required">
			        </div>
			        <div>
			          	<label>REGIONAL::</label>
			          	<input type="text" name="regional" class="form-control" data-validation="required">
			        </div>
			        <div>
			          <label>CENTRO DE FORMACIÓN: </label>
			          <input type="number" name="centro_formacion" class="form-control" data-validation="required">
			        </div>  
			        <div>
			          <label>TELEFONO</label>
			          <input type="number" name="telefono" class="form-control" data-validation="required">
			        </div>
			        <div>
			          <label>OBSERVACIONES</label>
			          <input type="text" name="observaciones" class="form-control" data-validation="required">
			        </div>
			        <div>
			          <label>Estrato</label>
			          <input type="number" name="estrato" class="form-control" data-validation="required">
			        </div>
			        <button type="submit" class="btn btn-success">Enviar</button>
			        <button type="reset" class="btn btn-info">Borrar</button>
			        <a class="btn btn-primary" href="index.php">Volver</a>
			      </form>
		    </div>
		</div>
	</div>
<?php 
	if ($_POST) {
	    $nombre_completo =$_POST["nombre_completo"];
	    $tipo_documento = $_POST["tipo_documento"];
	    $numero_documento = $_POST["numero_documento"];
	    $direccion = $_POST["direccion"];
	    $barrio = $_POST["barrio"];
	    $estrato = $_POST["estrato"];
	    $telefono = $_POST["telefono"];
	    $email = $_POST["email"];
	    $programa_formacion = $_POST["programa_formacion"];
	    $numero_ficha = $_POST["numero_ficha"];
	    $jornada = $_POST["jornada"];
	    $dep1 = $_POST["dep1"];
	    $dep2 = $_POST["dep2"];
	    $dep3 = $_POST["dep3"];
	    $apoyo = $_POST["apoyo"];
	    $compromiso = $_POST["compromiso"];
	    $especificacion_suplemento = $_POST["especificacion_suplemento"];
	    $cod_aprendiz = $_POST["cod_aprendiz"];



	    if ($nombre_completo != '' && $tipo_documento != '' && $numero_documento != '' && $direccion != '' && $barrio != '' && $estrato != '' && $telefono != '' && $email != '' && $programa_formacion != '' && $numero_ficha != '' && $jornada != '' && $dep1 != '' && $dep2 != '' && $dep3 != '' && $apoyo != '' && $compromiso != '' && $especificacion_suplemento != '' && $cod_aprendiz != '') {
	    
	      $sql = "INSERT INTO aprendices VALUES ('',
	      '$nombre_completo', 
	      '$tipo_documento', 
	      '$numero_documento', 
	      '$direccion', 
	      '$barrio', 
	      '$estrato', 
	      '$telefono', 
	      '$email', 
	      '$programa_formacion', 
	      '$numero_ficha', 
	      '$jornada', 
	      '$dep1', 
	      '$dep2', 
	      '$dep3', 
	      '$apoyo', 
	      '$compromiso', 
	      '$especificacion_suplemento', 
	      '$cod_aprendiz',default)";

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