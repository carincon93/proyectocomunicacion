<?php 
	require 'config/app.php';
	include 'templates/header.inc';
 ?>
<body>
	<div class="jumbotron boxlogin">
		<form action="validacion_loguin.php" METHOD="POST" name="flogin" id="flogin">
			<label for="">Correo electronico</label>
			<input type="text" name="correo" id="correo" class="form-control">
			<br>
			<label for="">Regional</label>
			<select class="form-control" data-live-search="true"  name="region" id="regionales" onchange="">
				<option data-tokens="frosting">Seleccione...</option>
				<option data-tokens="mustard" value="Atlantico">Regional Atlantico</option>
				<option data-tokens="mustard" value="Bolivar">Regional Bolivar</option>
				<option data-tokens="mustard" value="Cesar">Regional Cesar</option>
				<option data-tokens="mustard" value="Cordoba">Regional Córdoba</option>
				<option data-tokens="mustard" value="Guajira">Regional Guajira</option>
				<option data-tokens="mustard" value="Magdalena">Regional Magdalena</option>
				<option data-tokens="mustard" value="San Andres">Regional San Andres</option>
				<option data-tokens="mustard" value="Sucre">Regional Sucre</option>
				<option data-tokens="mustard" value="Antioquia">Regional Antioquia</option>
				<option data-tokens="mustard" value="Bogota">Regional Bogotá</option>
				<option data-tokens="mustard" value="Boyaca">Regional Boyacá</option>
				<option data-tokens="mustard" value="Caldas">Regional Caldas</option>
				<option data-tokens="mustard" value="Cundinamarca">Regional Cundinamarca</option>
				<option data-tokens="mustard" value="Huila">Regional Huila</option>
				<option data-tokens="mustard" value="Norte de Santander">Regional Norte de Santander</option>
				<option data-tokens="mustard" value="Quindio">Regional Quindio</option>
				<option data-tokens="mustard" value="Risaralda">Regional Risaralda</option>
				<option data-tokens="mustard" value="Santander">Regional Santander</option>
				<option data-tokens="mustard" value="Tolima">Regional Tolima</option>
				<option data-tokens="mustard" value="Cauca">Regional Cauca</option>
				<option data-tokens="mustard" value="Choco">Regional Chocó</option>
				<option data-tokens="mustard" value="Nariño">Regional Nariño</option>
				<option data-tokens="mustard" value="Valle">Regional Valle</option>
				<option data-tokens="mustard" value="Amazonas">Regional Amazonas</option>
				<option data-tokens="mustard" value="Caqueta">Regional Caquetá</option>
				<option data-tokens="mustard" value="Guainia">Regional Guainía</option>
				<option data-tokens="mustard" value="Putumayo">Regional Putumayo</option>
				<option data-tokens="mustard" value="Vaupes">Regional Vaupés</option>
				<option data-tokens="mustard" value="Arauca">Regional Arauca</option>
				<option data-tokens="mustard" value="Casanare">Regional Casanare</option>
				<option data-tokens="mustard" value="Guaviare">Regional Guaviare</option>
				<option data-tokens="mustard" value="Meta">Regional Meta</option>
				<option data-tokens="mustard" value="Vichada">Regional Vichada</option>
			</select><br>
			<label for="">Contraseña:</label>
			<br>
			<input type="password" name="pass" id="password" class="form-control">
			<br>
			<input type="submit" name="validacion" class="btn btn-success" id="btn" value="Ingresar" class="form-control">
		</form>
	</div>
<?php include 'templates/footer.inc'; ?>