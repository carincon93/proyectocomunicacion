<?php 
	include '../config/app.php';
	include '../templates/header.inc';
	include '../config/conexion.php';

 ?>
	<h1 class="text-center">Formulario Egresados</h1>
	<hr>
	<a href="gestion_empleado.php" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>Volver</a>
	
	<div class="col-md-offset-3 col-md-6">
		<form method="POST">
		<label for="">Contacto o Jefe Inmediato</label> <i class="fa fa-pencil-square"></i>
		<input type="text" class="form-control" placeholder="Nombre Completo*" name="jefe" required=""  ><br><br>
		<label for="">Estrato</label><i class="fa fa-address-card"></i>
		<select class="form-control" data-live-search="true" name="estrato" required="">
			<option data-tokens="frosting">Seleccione...</option>
			<option data-tokens="ketchup mustard" value="1">1</option>
			<option data-tokens="mustard" value="2">2</option>
			<option data-tokens="frosting" value="3">3</option>
			<option data-tokens="frosting" value="4">4</option>
			<option data-tokens="frosting" value="5">5</option>
			<option data-tokens="frosting" value="6">6</option>
		</select><br><br>
		<label for="">ID Programa de Formacion</label><i class="fa fa-phone"></i>
		<input type="text" class="form-control" placeholder="ID Programa*" name="id_programa" required=""><br><br>
		<label for="">Telefono</label> <i class="fa fa-at"></i>
		<input type="number" class="form-control" placeholder="Tel*" name="telefono" required=""><br><br>
		<label for="">Observaciones: </label> <i></i>
		<div class="form-group">
  			<textarea name="observaciones" class="form-control" rows="5" id="comment"></textarea>
		</div>
		<label for="">Celular</label> <i class="fa fa-at"></i>
		<input type="number" class="form-control" placeholder="Cel*" name="celular" required=""><br><br>

		<label for="">Direccion: </label><i class="fa fa-plus-circle"></i>
		<input type="text" class="form-control" placeholder="Dir*" name="direccion" required=""><br><br>

		<label for="">Nombre del Programa de Formacion: </label> <i class="fa fa-at"></i>
		<input type="text" class="form-control" placeholder="formacion*" name="formacion" required=""><br><br>

		<label for="">Numero de Documento: </label> <i class="fa fa-at"></i>
		<input type="number" class="form-control" placeholder="documento" name="documento" required=""><br><br>

		<label for="">Correo Electronico: </label> <i class="fa fa-at"></i>
		<input type="email" class="form-control" placeholder="correo*" name="correo" required=""><br><br>

		<label for="">Empresa: </label> <i class="fa fa-at"></i>
		<input type="text" class="form-control" placeholder="empresa*" name="empresa" required=""><br><br>

		<label for="">Tipo de Poblacion: </label> <i class="fa fa-at"></i>
		<input type="text" class="form-control" placeholder="poblacion*" name="poblacion" required=""><br><br>

		<label for="">Centro de Formacion: </label> <i class="fa fa-at"></i>
		<input type="text" class="form-control" placeholder="centro_formacion" name="centro" required=""><br><br>
		
		<label for="">Posee Vinculacion Laboral:</label>
		<select class="form-control" data-live-search="true" name="laboral" required="">
			<option data-tokens="frosting">Seleccione...</option>
			<option data-tokens="ketchup mustard" value="si">Si</option>
			<option data-tokens="mustard" value="no">No</option>
		</select><br><br>

		<!-- Lista dependiente -->
		<label for="">Regional a la que Pertenece: </label>
		<select class="form-control" data-live-search="true"  name="regional" id="regionales" onchange="">
			<option data-tokens="frosting">Seleccione...</option>
			<option data-tokens="ketchup mustard" value="1">Regional Atlantico</option>
			<option data-tokens="mustard" value="2">Regional Bolivar</option>
			<option data-tokens="mustard" value="3">Regional Cesar</option>
			<option data-tokens="mustard" value="4">Regional Córdoba</option>
			<option data-tokens="mustard" value="5">Regional Guajira</option>
			<option data-tokens="mustard" value="6">Regional Magdalena</option>
			<option data-tokens="mustard" value="7">Regional San Andres</option>
			<option data-tokens="mustard" value="8">Regional Sucre</option>
			<option data-tokens="mustard" value="9">Regional Antioquia</option>
			<option data-tokens="mustard" value="10">Regional Bogotá</option>

			<option data-tokens="mustard" value="11">Regional Boyacá</option>
			<option data-tokens="mustard" value="12">Regional Caldas</option>
			<option data-tokens="mustard" value="13">Regional Cundinamarca</option>
			<option data-tokens="mustard" value="14">Regional Huila</option>
			<option data-tokens="mustard" value="15">Regional Norte de Santander</option>
			<option data-tokens="mustard" value="16">Regional Quindio</option>
			<option data-tokens="mustard" value="17">Regional Risaralda</option>
			<option data-tokens="mustard" value="18">Regional Santander</option>
			<option data-tokens="mustard" value="19">Regional Tolima</option>
			<option data-tokens="mustard" value="20">Regional Cauca</option>
			<option data-tokens="mustard" value="21">Regional Chocó</option>
			<option data-tokens="mustard" value="22">Regional Nariño</option>
			<option data-tokens="mustard" value="23">Regional Valle</option>
			<option data-tokens="mustard" value="24">Regional Amazonas</option>
			<option data-tokens="mustard" value="25">Regional Caquetá</option>
			<option data-tokens="mustard" value="26">Regional Guainía</option>
			<option data-tokens="mustard" value="27">Regional Putumayo</option>
			<option data-tokens="mustard" value="28">Regional Vaupés</option>
			<option data-tokens="mustard" value="29">Regional Arauca</option>
			<option data-tokens="mustard" value="30">Regional Casanare</option>
			<option data-tokens="mustard" value="31">Regional Guaviare</option>
			<option data-tokens="mustard" value="32">Regional Meta</option>
			<option data-tokens="mustard" value="33">Regional Vichada</option>
		</select><br><br>


	

		<label for="">Centro de Formación: </label>
		<select id="referencias" class="form-control" disabled></select><br><br>

		<label for="">Tiulo:</label>
		<select name="titulo" class="form-control" data-live-search="true" onchange="">
		<option value="" data-tokens=" ketchup mustard">Seleccione...</option>
		<option data-tokens="mustard" value="Especializacion">Especialización</option>
		<option data-tokens="mustard" value="Tecnologo">Tecnológo</option>
		<option data-tokens="mustard" value="Tecnico">Técnico</option>
		<option data-tokens="mustard" value="Auxiliar">Auxiliar</option>
		<option data-tokens="mustard" value="Operario">Operario</option>
		</select><br><br>

		<label for="">Correo Electrónico Alternativo: </label>
		<input type="email" class="form-control" placeholder="correo_ar" name="correo"><br><br>

		<label for="">Año de Egreso:</label>
		<input type="date" class="form-control" name="ingreso" required=""><br><br>

		<label for="">Edad:</label>
		<input type="number" class="form-control" name="edad" placeholder="edad*" required=""><br><br>

		<label for="">Municipio:</label>
		<input type="number" class="form-control" name="municipio" placeholder="municipio" required=""><br><br>
		<label for="">Género: </label>
		<select name="genero" id="sex" class="form-control" data-live-search="true">
		<option value="" class="ketchup mustard">Seleccione...</option>
		<option value="Masculino" class="mustard">Masculino</option>
		<option value="Femenino" class="mustard">Femenino</option>
		<option value="No especifica" class="mustard">No especifíca</option>
		</select><br><br>

		

		<input class="btn btn-danger" type="submit" value="Enviar">
		<input class="btn btn-danger" type="reset" value="Borrar">
	</form>
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