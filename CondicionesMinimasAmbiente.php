<?php require 'config/app.php'; ?>
<?php include 'templates/header.inc'; ?>
<form method="POST" enctype="multipart/form-data">
	<div class="contenedor container-fluid">
		<h1 class="text-center">Ambientes de Formacion (Especificacion por Programa y por Red de Conocimiento)</h1>
		<hr>			
			<div class="con1">	
				 <h3 class="text-center">Programa de formacion titulada</h3>		
				 <hr>	
		 		 <label>Red de conocimiento</label>
		 		 <input type="text" name="red" class="form-control" >

		 		
		 		 <label for="">Area Tematica (Linea Tecnica)</label>
      	 		 <input type="text" name="area_tematica" id="username" class="form-control"  >
		  		
      	 		

	      		 <label for="">Nivel de formacion</label>
	     	 	 <input type="text" name="nivel" class="form-control" >
		    	

	   	    	 <label for="">Nombre del programa de Formacion</label>
	        	 <input type="text" name="nombre_programa" class="form-control" >
		 		

		 		 <label for="">Codigo del Programa de Formacion en Sofia Plus</label>
	        	 <input type="number" name="codigo" class="form-control" >		
			</div>		


<!-- ---------------- -->


			<div class="con2">	
				  <h3 class="text-center">Caracteristicas de Infraestructura Fisica</h3>
				  <hr>
		
		 	 	  <label>Tipo de Ambiente</label>
		 		  <input type="text" name="tipo" class="form-control" >

		 		
		 	 	 <label for="">Competencias a Desarrollar en el Ambiente</label>
      	 		 <textarea name="competencias" id="" cols="10" rows="6" class="form-control"></textarea>
		  	 	

	      		 <label for="">Nombre de Ambiente</label>
	     		 <input type="text" name="nombre_ambiente" class="form-control" >
		     	

	   	   	     <label for="">Reglamentacion Juridica Especial para el Ambiente</label>
      	 		 <textarea name="reglamento" id="" cols="10" rows="6" class="form-control"></textarea>
		 	 	

		 		 <label for="">Area Requerida</label>
	       	     <input type="text" name="area_requerida" class="form-control " >
	       	    

	        	 <label for="">Espicificaciones Tecnicas a Destacar de Infraestructura Fisica</label>
      	 		 <textarea name="especificaciones" id="" cols="10" rows="6" class="form-control"></textarea>
	        	

	        	 <label for="">Caracterizacion</label>
	        	 <input type="text" name="caracterizacion" class="form-control" >
			</div>	


<!-- ---------------- -->


			<div class="con3">
				<h3 class="text-center">Capacidad Ambiente de Formacion</h3>
				<hr>		
				<label>Número de Aprendices Estipulados por Ficha</label>
		 		<input type="number" name="numero_aprendices" class="form-control" >
				
	 		 </div>
		</div>


<!-- ----------------------------------------------------- -->


	<div class="contenedor2">
		<h1 class="text-center">Caracteristicas Tecnologia</h1>
		<hr>
		
		
		<div class="con4">	
			<h3 class="text-center">Maquinaria y Equipo Especializado</h3>
			<hr>
			<h4>Especificaciones</h4>
		
			

		 	<label>Identificacion de maquinaria y equipo</label>
		 	<input type="text" name="identificacion1" class="form-control" >

		 
		 	<label for="">Cantidad por ambiente</label>
      	 	<input type="text" name="cantidad1" id="username" class="form-control">
		  

	        <label for="">Unidad de medida</label>
	        <input type="text" name="unidad1" class="form-control">
		   

	   	    <label for="">Costo unitario (pesos moneda corriente)</label>
	        <input type="text" name="costo1" class="form-control">
		 
		
			 
			<h4>Seleccione una sola casilla con 'X' , segun corresponda</h4>
			<select name="seleccion1" id="">
			 	<option value="Fundamentales">Fundamentales</option>
			 	<option value="Adicionales(Para nivel estandar)">Adicionales(Para nivel estandar)</option>
			 	<option value="Adicionales(Para nivel excelencia)">Adicionales(Para nivel excelencia)</option>
			</select>	
		</div>		


<!-- ---------------- -->


		<div class="con5">	
			<h3 class="text-center">Software Especializado(si aplica)</h3>
			<hr>
			<h4>Especificaciones</h4>
		
			

		 	<label>Identificacion Software Especializado</label>
		 	<input type="text" name="identificacion2" class="form-control" >

		 
		 	<label for="">Cantidad por ambiente</label>
      	 	<input type="text" name="cantidad2" id="username" class="form-control">
		  

	        <label for="">Unidad de medida</label>
	        <input type="text" name="unidad2" class="form-control" >
		   

	   	    <label for="">Costo unitario (pesos moneda corriente)</label>
	        <input type="text" name="costo2" class="form-control" >
		 
		
			 
			<h4>Seleccione una sola casilla con 'X' , segun corresponda</h4>
			<select name="seleccion2" id="">
			 	<option value="Fundamentales">Fundamentales</option>
			 	<option value="Adicionales(Para nivel estandar)">Adicionales(Para nivel estandar)</option>
			 	<option value="Adicionales(Para nivel excelencia)">Adicionales(Para nivel excelencia)</option>
			</select>	
		</div>	


<!-- ---------------- -->


		<div class="con6">
			<h3 class="text-center">Simuladores Especificos(si aplica)</h3>
			<hr>
			<h4>Especificaciones</h4>
		

		 	<label>Identificacion Simulador Especifico</label>
		 	<input type="text" name="identificacion3" class="form-control" >

		 
		 	<label for="">Cantidad por ambiente</label>
      	 	<input type="text" name="cantidad3" id="username" class="form-control">
		  

	        <label for="">Unidad de medida</label>
	        <input type="text" name="unidad3" class="form-control" >
		   

	   	    <label for="">Costo unitario (pesos moneda corriente)</label>
	        <input type="text" name="costo3" class="form-control" >
		 
		
			 
			<h4>Seleccione una sola casilla con 'X' , segun corresponda</h4>
			<select name="seleccion3" id="">
			 	<option value="Fundamentales">Fundamentales</option>
			 	<option value="Adicionales(Para nivel estandar)">Adicionales(Para nivel estandar)</option>
			 	<option value="Adicionales(Para nivel excelencia)">Adicionales(Para nivel excelencia)</option>
			</select>	
	    </div>

		<div class="con7">
			<h3 class="text-center">Herramientas Especializadas</h3>
			 <hr>
			 <h4>Especificaciones</h4>
			
			

		 	 <label>Identificacion Herramientas Especializadas</label>
		 	<input type="text" name="identificacion4" class="form-control">

		 
		 	<label for="">Cantidad por ambiente</label>
      	 	<input type="text" name="cantidad4" id="username" class="form-control">
		  

	        <label for="">Unidad de medida</label>
	        <input type="text" name="unidad4" class="form-control">
		   

	   	    <label for="">Costo unitario (pesos moneda corriente)</label>
	        <input type="text" name="costo4" class="form-control">
		 
		
			 
			<h4>Seleccione una sola casilla con 'X' , segun corresponda</h4>
			<select name="seleccion4" id="">
			 	<option value="Fundamentales">Fundamentales</option>
			 	<option value="Adicionales(Para nivel estandar)">Adicionales(Para nivel estandar)</option>
			 	<option value="Adicionales(Para nivel excelencia)">Adicionales(Para nivel excelencia)</option>
			</select>	
	    </div>
		

<!-- ---------------- -->


		<div class="con7">
			<h3 class="text-center">Medios de Apoyo</h3>
			 <hr>
			 <h4>Especificaciones</h4>
			

		 	 <label>Identificacion de Maquinaria y Equipo</label>
		 	<input type="text" name="identificacion5" class="form-control">

		 
		 	<label for="">Cantidad por ambiente</label>
      	 	<input type="text" name="cantidad5" id="username" class="form-control" >
		  

	        <label for="">Unidad de medida</label>
	        <input type="text" name="unidad5" class="form-control">
		   

	   	    <label for="">Costo unitario (pesos moneda corriente)</label>
	        <input type="text" name="costo5" class="form-control">
		 
		
			 
			<h4>Seleccione una sola casilla con 'X' , segun corresponda</h4>
			<select name="seleccion5" id="">
			 	<option value="Fundamentales">Fundamentales</option>
			 	<option value="Adicionales(Para nivel estandar)">Adicionales(Para nivel estandar)</option>
			 	<option value="Adicionales(Para nivel excelencia)">Adicionales(Para nivel excelencia)</option>
			</select>	
	    </div>
		

<!-- ---------------- -->


		<div class="con7">
			<h3 class="text-center">Mobiliario</h3>
			 <hr>
			 <h4>Especificaciones</h4>
			

		 	 <label>Identificacion de Maquinaria y Equipo</label>
		 	<input type="text" name="identificacion6" class="form-control">

		 
		 	<label for="">Cantidad por ambiente</label>
      	 	<input type="text" name="cantidad6" id="username" class="form-control" >
		  

	        <label for="">Unidad de medida</label>
	        <input type="text" name="unidad6" class="form-control">
		   

	   	    <label for="">Costo unitario (pesos moneda corriente)</label>
	        <input type="text" name="costo6" class="form-control">
		 
		
			 
			<h4>Seleccione una sola casilla con 'X' , segun corresponda</h4>
			<select name="seleccion6" id="">
			 	<option value="Fundamentales">Fundamentales</option>
			 	<option value="Adicionales(Para nivel estandar)">Adicionales(Para nivel estandar)</option>
			 	<option value="Adicionales(Para nivel excelencia)">Adicionales(Para nivel excelencia)</option>
			</select>	
	    </div>
	</div>
	

<!-- ----------------------------------------------------- -->
	

	<div class="contenedor1">
    	  <h1 class="text-center">Elementos y Condiciones Relacionados con Seguridad Industrial, Salud Ocupacional y Medio Ambiente</h2>
     	  <hr>
      	  <div class="con8">			
			 <h4>Especificaciones</h4>
			

		 	 <label>Identificacion de Maquinaria y Equipo</label>
		 <input type="text" name="identificacion7" class="form-control">

		 
		 	<label for="">Cantidad por ambiente</label>
      	 	<input type="text" name="cantidad7" id="username" class="form-control"  >
		  

	        <label for="">Unidad de medida</label>
	        <input type="text" name="unidad7" class="form-control">
		   

	   	    <label for="">Costo unitario (pesos moneda corriente)</label>
	        <input type="text" name="costo7" class="form-control">
		 
		
			 
			<h4>Seleccione una sola casilla con 'X' , segun corresponda</h4>
			<select name="seleccion7" id="">
			 	<option value="Fundamentales">Fundamentales</option>
			 	<option value="Adicionales(Para nivel estandar)">Adicionales(Para nivel estandar)</option>
			 	<option value="Adicionales(Para nivel excelencia)">Adicionales(Para nivel excelencia)</option>
			</select>	
		 		  	  	  	     
		 
	  </div>

<!-- ----------------------------------------------------- -->


	  	<div class="con9">			
			 <h4>Plano Y/O foto</h4>
			

		 	 <label>Diseño arquitectonico con especificacion de equipos y/o foto del ambiente de formacion</label>
		 	 
		 		  	  	  	 
	 	</div>
	
	<input type="submit" name="" class="btn btn-success" id="btn" value="Ingresar">	
	<input type="reset" name="" class="btn btn-danger" id="btn1" value="Limpiar">
	</form>
	<?php					
			if ($_POST) {
						$red 			=$_POST['red'];
						$area_tematica	=$_POST['area_tematica'];
						$nivel 			=$_POST['nivel'];
						$nombre_programa=$_POST['nombre_programa'];
						$codigo 		=$_POST['codigo'];


						$tipo 			=$_POST['tipo'];
						$competencias 	=$_POST['competencias'];
						$nombre_ambiente=$_POST['nombre_ambiente'];
						$reglamento=$_POST['reglamento'];
						$area_requerida=$_POST['area_requerida'];
						$especificaciones=$_POST['especificaciones'];
						$caracterizacion=$_POST['caracterizacion'];
						$nombre_ambiente=$_POST['nombre_ambiente'];
						$reglamento=$_POST['reglamento'];
						$area_requerida=$_POST['area_requerida'];
						$especificaciones = $_POST['especificaciones'];


						$numero_aprendices=$_POST['numero_aprendices'];


						$identificacion1=$_POST['identificacion1'];
						$cantidad1=$_POST['cantidad1'];
						$unidad1=$_POST['unidad1'];
						$costo1=$_POST['costo1'];
						$seleccion1=$_POST['seleccion1'];

						$identificacion2=$_POST['identificacion2'];
						$cantidad2=$_POST['cantidad2'];
						$unidad2=$_POST['unidad2'];
						$costo2=$_POST['costo2'];
						$seleccion2=$_POST['seleccion2'];
						
						$identificacion3=$_POST['identificacion3'];
						$cantidad3=$_POST['cantidad3'];
						$unidad3=$_POST['unidad3'];
						$costo3=$_POST['costo3'];
						$seleccion3=$_POST['seleccion3'];

						$identificacion4=$_POST['identificacion4'];
						$cantidad4=$_POST['cantidad4'];
						$unidad4=$_POST['unidad4'];
						$costo4=$_POST['costo4'];
						$seleccion4=$_POST['seleccion4'];

						$identificacion5=$_POST['identificacion5'];
						$cantidad5=$_POST['cantidad5'];
						$unidad5=$_POST['unidad5'];
						$costo5=$_POST['costo5'];
						$seleccion5=$_POST['seleccion5'];
						
						$identificacion6=$_POST['identificacion6'];
						$cantidad6=$_POST['cantidad6'];
						$unidad6=$_POST['unidad6'];
						$costo6=$_POST['costo6'];
						$seleccion6=$_POST['seleccion6'];
						
						$identificacion7=$_POST['identificacion7'];
						$cantidad7=$_POST['cantidad7'];
						$unidad7=$_POST['unidad7'];
						$costo7=$_POST['costo7'];
						$seleccion7=$_POST['seleccion7'];
						$imagen = 'public/imgs/';


						$con=mysqli_connect('localhost','root','','proyectocomunicacion');
						$query="INSERT INTO condicion_ambiente VALUES('',
						'$red',
						'$area_tematica',
						'$nivel',
						'$nombre_programa',
						'$codigo',
						'$tipo',
						'$competencias',
						'nombre_ambiente',
						'reglamento',
						'area_requerida',
						'especificaciones',
						'$caracterizacion',
						'$numero_aprendices',
						'$identificacion1',
						'$cantidad1',
						'$unidad1',
						'$costo1',
						'$seleccion1',
						'$identificacion2',
						'$cantidad2',
						'$unidad2',
						'$costo2',
						'$seleccion2',
						'$identificacion3',
						'$cantidad3',
						'$unidad3',
						'$costo3',
						'$seleccion3',
						'$identificacion4',
						'$cantidad4',
						'$unidad4',
						'$costo4',
						'$seleccion4',
						'$identificacion5',
						'$cantidad5',
						'$unidad5',
						'$costo5',
						'$seleccion5',
						'$identificacion6',
						'$cantidad6',
						'$unidad6',
						'$costo6',
						'$seleccion6',
						'$identificacion7',
						'$cantidad7',
						'$unidad7',
						'$costo7',
						'$seleccion7')";
							$row=mysqli_query($con,$query);
						if ($row) {
							echo "<script>alert('exito')</script>";
						}else{
							echo "<script>alert('no conect')</script>";
						}

					}					

?>
</form>	

</body>
</html>