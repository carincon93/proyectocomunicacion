<?php
	if ($_GET) {
		$marca = $_GET['marca'];
		if($marca == 'Atlantico') {
			echo "<option>CENTRO PARA EL DESARROLLO AGROECOLÓGICO Y AGROINDUSTRIAL</option>
				  <option>CENTRO NACIONAL COLOMBO ALEMÁN</option>
				  <option>CENTRO INDUSTRIAL Y DE AVIACIÓN</option>
				  <option>CENTRO COMERCIO Y SERVICIOS</option>";

		}
		if($marca == 'Bolivar') {
			echo "<option>CENTRO AGROEMPRESARIAL Y MINERO</option>
				  <option>CENTRO INTERNACIONAL NÁUTICO FLUVIAL Y PORTUARIO</option>
				  <option>CENTRO PARA LA INDUSTRIA PETROQUÍMICA</option>
				  <option>CENTRO DE COMERCIO Y SERVICIOS</option>";
		}
		if($marca == 'Cesar') {
			echo "<option> CENTRO BIOTECNOLÓGICO DEL CARIBE</option>
				  <option>CENTRO AGROEMPRESARIAL</option>
				  <option>CENTRO DE OPERACIÓN Y MANTENIMIENTO MINERO
					DIRECCION REGIONAL DEL CESAR</option>";

		}

		if($marca == 'Cordoba') {
			echo "<option>CENTRO AGROPECUARIO Y DE BIOTECNOLOGÍA EL PORVENIR</option>
				  <option>CENTRO COMERCIO, INDUSTRIA Y TURISMO</option>";
		}

		if($marca == 'Guajira') {
			echo "<option>CENTRO INDUSTRIAL Y DE ENERGÍAS ALTERNATIVAS</option>
				  <option>CENTRO AGROEMPRESARIAL Y ACUÍCOLA</option>";
		}

		if($marca == 'Magdalena') {
			echo "<option>CENTRO ACUÍCOLA Y AGROINDUSTRIAL DE GAIRA</option>
				  <option>CENTRO DE LOGÍSTICA Y PROMOCIÓN ECOTURÍSTICA DEL MAGDALENA</option>";
		}

		if($marca == 'San Andres') {
			echo "<option>CENTRO DE FORMACIÓN TURÍSTICA, GENTE DE MAR Y DE SERVICIOS </option>";
		}

		if($marca == 'Sucre') {
			echo "<option>CENTRO DE LA INNOVACIÓN, LA TECNOLOGÍA Y LOS SERVICIOS</option>";
		}

		if($marca == 'Antioquia') {
			echo "<option>CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA</option>
				  <option>CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO</option>
				  <option>CENTRO DE COMERCIO</option>
				  <option>CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA</option>
				  <option>CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN</option>
				  <option>CENTRO DE SERVICIOS DE SALUD</option>
				  <option>CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL</option>
				  <option>CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA</option>
				  <option>CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN</option>
				  <option>CENTRO TECNOLÓGICO DEL MOBILIARIO</option>
				  <option>CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE</option>
				  <option>CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL</option>";
				  

		}

		if($marca == 'Bogota') {
			echo "<option>CENTRO DE DISEÑO Y METROLOGÍA</option>
				 <option>CENTRO DE ELECTRICIDAD, ELECTRÓNICA Y TELECOMUNICACIONES</option>
				 <option>CENTRO DE FORMACIÓN DE TALENTO HUMANO EN SALUD</option>
				 <option>CENTRO DE GESTIÓN ADMINISTRATIVA</option>
				 <option>CENTRO DE GESTIÓN DE MERCADOS, LOGÍSTICA Y TIC'S</option>
				 <option>CENTRO DE GESTIÓN INDUSTRIAL</option>
				 <option>CENTRO DE FORMACIÓN EN ACTIVIDAD FÍSICA Y CULTURA</option>
				 <option>CENTRO DE MANUFACTURAS EN TEXTILES Y CUERO</option>
				 <option>CENTRO DE MATERIALES Y ENSAYOS</option>
				 <option>CENTRO DE SERVICIOS FINANCIEROS</option>
				 <option>CENTRO DE TECNOLOGÍAS DE TRANSPORTE</option>
				 <option>CENTRO DE TECNOLOGÍAS PARA LA CONSTRUCCIÓN Y LA MADERA</option>
				 <option>CENTRO METALMECÁNICO</option>
				 <option>CENTRO NACIONAL DE HOTELERÍA, TURISMO Y ALIMENTOS</option>
				 <option>CENTRO PARA LA INDUSTRIA DE LA COMUNICACIÓN GRÁFICA</option>";
		}



		if($marca == 'Boyaca') {
				echo "<option>CENTRO DE DESARROLLO AGROPECUARIO Y AGROINDUSTRIAL</option>

				 <option>CENTRO DE GESTIÓN ADMINISTRATIVA Y FORTALECIMIENTO EMPRESARIAL</option>
				 <option>CENTRO INDUSTRIAL DE MANTENIMIENTO Y MANUFACTURACENTRO MINERO</option>
				  <option>CENTRO MINERO</option>";
		}

		if($marca == 'Caldas') {
			echo "<option>CENTRO DE AUTOMATIZACIÓN INDUSTRIAL</option>
				  <option>CENTRO DE COMERCIO Y SERVICIOS</option>
				  <option>CENTRO DE PROCESOS INDUSTRIALES Y CONSTRUCCIÓN</option>
				  <option>CENTRO PARA LA FORMACIÓN CAFETERA</option>
				  <option>CENTRO PECUARIO Y AGROEMPRESARIAL</option>";

		}

		if($marca == 'Cundinamarca') {
			echo "<option>CENTRO DE BIOTECNOLOGÍA AGROPECUARIA</option>
				  <option>CENTRO DE DESARROLLO AGROEMPRESARIAL</option>
				  <option>CENTRO DE DESARROLLO AGROINDUSTRIAL Y EMPRESARIAL</option>
				  <option>CENTRO DE LA TECNOLOGÍA DEL DISEÑO Y LA PRODUCTIVIDAD EMPRESARIAL</option>
				  <option>CENTRO INDUSTRIAL Y DESARROLLO EMPRESARIAL DE SOACHA</option>
				  <option>CENTRO AGROECOLÓGICO Y EMPRESARIA</option>";

		}


		if($marca == 'Huila') {
			echo "<option>CENTRO AGROEMPRESARIAL Y DESARROLLO PECUARIO DEL HUILA</option>
				  <option>CENTRO DE DESARROLLO AGROEMPRESARIAL Y TURÍSTICO DEL HUILA</option
				  <option>CENTRO DE FORMACIÓN AGROINDUSTRIAL</option>
				  <option>CENTRO DE GESTIÓN Y DESARROLLO SOSTENIBLE SURCOLOMBIANO</option>
				  <option>CENTRO DE LA INDUSTRIA, LA EMPRESA Y LOS SERVICIOS</option>";

		}




		if($marca == 'Norte de Santander') {
			echo "<option>CENTRO DE FORMACIÓN PARA EL DESARROLLO RURAL Y MINERO</option>
				  <option>CENTRO DE LA INDUSTRIA, LA EMPRESA Y LOS SERVICIOS</option>";
		}


		if($marca == 'Quindio') {
			echo "<option>CENTRO AGROINDUSTRIAL</option>
				  <option>CENTRO DE COMERCIO, INDUSTRIA Y COMERCIO</option>
				  <option>CENTRO PARA EL DESARROLLO TECNOLÓGICO DE LA CONSTRUCCIÓN</option>";
		}

		if($marca == 'Risaralda') {
			echo "<option>CENTRO DE ATENCIÓN AL SECTOR AGROPECUARIO</option>
				  <option>CENTRO DE COMERCIO Y SERVICIOS</option>
				  <option>CENTRO DE DISEÑO E INNOVACIÓN TECNOLÓGICA INDUSTRIAL</option>";
		}

		if($marca == 'Santander') {
			echo "<option>CENTRO AGROEMPRESARIAL Y TURÍSTICO DE LOS ANDES</option>
				  <option>CENTRO AGROTURÍSTICO</option>
				  <option>CENTRO DE ATENCIÓN AL SECTOR AGROPECUARIO</option>
				  <option>CENTRO DE GESTIÓN AGROEMPRESARIAL DEL ORIENTE</option>
				  <option>CENTRO DE SERVICIOS EMPRESARIALES Y TURÍSTICOS</option>
				  <option>CENTRO INDUSTRIAL DE MATENIMIENTO INTEGRAL</option>
				  <option>CENTRO INDUSTRIAL DEL DISEÑO Y LA MANUFACTURA</option>
				  <option>CENTRO INDUSTRIAL Y DEL DESARROLLO TECNOLÓGICO</option>";
		}

	


		if($marca == 'Tolima') {
			echo "<option>CENTRO AGROPECUARIO LA GRANJA</option>
				  <option>CENTRO DE COMERICIO Y SERVICIOS</option>
				  <option>CENTRO DE INDUSTRIA Y DE LA CONSTRUCCIÓN</option>";
		}




		if($marca == 'Cauca') {
			echo "<option>CENTRO AGROPECUARIO</option>
				  <option>CENTRO DE TELEINFORMÁTICA Y PRODUCCIÓN INDUSTRIAL</option>
				  <option>CENTRO DE COMERCIO Y SERVICIOS</option>";
		}
	


		if($marca == 'Choco') {
			echo "<option>CENTRO DE RECURSOS NATURALES, INDUSTRIA Y BIODIVERSIDAD</option>";
		}

		if($marca == 'Nariño') {
			echo "<option>CENTRO SURCOLOMBIANO DE LOGÍSTICA INTERNACIONAL</option>
				  <option>CENTRO AGROINDUSTRIAL Y PESQUERO DE LA COSTA PACÍFICA</option>
				  <option>CENTRO INTERNACIONAL DE PRODUCCIÓN LIMPIA – LOPE</option>";
		}



		if($marca == 'Valle') {
			echo "<option>CENTRO AGROPECUARIO DE BUGA</option>
				  <option>CENTRO LATINOAMERICANO DE ESPECIES MENORES</option>
				  <option>CENTRO NÁUTICO PESQUERO DE BUENAVENTURA</option>
				  <option>CENTRO DE ELECTRICIDAD Y AUTOMATIZACIÓN INDUSTRIAL</option>
				  <option>CENTRO DE LA CONSTRUCCIÓN</option>
				  <option>CENTRO DE DISEÑO TECNOLÓGICO INDUSTRIAL</option>
				  <option>CENTRO DE GESTIÓN TECNOLÓGICA DE SERVICIOS</option>
				  <option>CENTRO DE TECNOLOGÍAS AGROINDUSTRIALES</option>

				  <option>CENTRO DE BIOTECNOLOGÍA INDUSTRIAL</option>

				  <option>CENTRO NACIONAL DE ASISTENCIA TÉCNICA A LA INDUSTRIA - ASTIN</option>";
		}



		if($marca == 'Amazonas') {
			echo "<option>CENTRO PARA LA BIODIVERSIDAD Y EL TURISMO DEL AMAZONAS</option>";
		}

		if($marca == 'Caqueta') {
			echo "<option>CENTRO TECNOLÓGICO DE LA AMAZONÍA</option>";
		}

		if($marca == 'Guainia') {
			echo "<option>CENTRO AMBIENTAL Y ECOTURÍSTICO DEL NORORIENTE AMAZÓNICO</option>";
		}


		if($marca == 'Putumayo') {
			echo "<option>CENTRO AGROFORESTAL Y ACUÍCOLA ARAPAIMA</option>";
		}


		if($marca == 'Vaupes') {
			echo "<option>CENTRO AGROPECUARIO Y DE SERVICIOS AMBIENTALES JIRIJIRIMO</option>";
		}


		if($marca == 'Arauca') {
			echo "<option>CENTRO DE GESTIÓN Y DESARROLLO AGROINDUSTRIAL DE ARAUCA</option>";
		}


		if($marca == 'Casanare') {
			echo "<option>CENTRO AGROINDUSTRIAL Y FORTALECIMIENTO EMPRESARIAL</option>";
		}


		if($marca == 'Guaviare') {
			echo "<option>CENTRO DE DESARROLLO AGROINDUSTRIAL, TURÍSTICO Y TECNOLÓGICO DEL GUAVIARE</option>";
		}


		if($marca == 'Meta') {
			echo "<option>CENTRO AGROINDUSTRIAL DEL META</option>
				  <option>CENTRO DE INDUSTRIA Y SERVICIOS DEL META</option>";
		}

		if($marca == 'Vichada') {
			echo "<option>CENTRO DE PRODUCCIÓN Y TRANSFORMACIÓN AGROINDUSTRIAL DE LA ORINOQUÍA</option>";
		}





		
	}
