<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'PQRS';
// $this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginBlock('jumbotron-contact'); ?>
<header class="jumbotron contact">
    <div class="container">

        <h1 class="text-center">Petición, Quejas, Reclamos, Sugerencias</h1>

    </div>
</header>
<?php $this->endBlock(); ?>
<section class="site-pqrs">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          
      		<form>
            <label >Nombre Completo</label>
            <input type="text" class="form-control">
            <label >Correo Electronico</label>
            <input type="email" class="form-control">
            <label > Tipo De Documento</label>
            <select name="tipo_doc" id="" class="form-control">
                <option value="">Seleccionar...</option>
                <option value="">Cédula de Ciudadanía (C.C)</option>
                <option value="">Tarjeta de Identificación (T.I)</option>
            </select>
            <label >Número de Documento</label>
            <input type="text" class="form-control">
            <label >Teléfono </label>
            <input type="text" class="form-control">

            <label > Celular </label>
            <input type="text" class="form-control">
            <label >Departamento</label>
            <select id="estado" name="estado" class="required form-control">
               <option value="">Seleccionar...</option>
               <option value="1">ANTIOQUIA</option>
               <option value="2">ATLANTICO</option>
               <option value="3">D.C.</option>
               <option value="4">BOLIVAR</option>
               <option value="5">BOYACA</option>
               <option value="6">CALDAS</option>
               <option value="7">CAQUETA</option>
               <option value="8">CAUCA</option>
               <option value="9">CESAR</option>
               <option value="10">CORDOBA</option>
               <option value="11">CUNDINAMARCA</option>
               <option value="12">CHOCO</option>
               <option value="13">HUILA</option>
               <option value="14">LA GUAJIRA</option>
               <option value="15">MAGDALENA</option>
               <option value="16">META</option>
               <option value="17">NARIÑO</option>
               <option value="18">NORTE DE SANTANDER</option>
               <option value="19">QUINDIO</option>
               <option value="20">RISARALDA</option>
               <option value="21">SANTANDER</option>
               <option value="22">SUCRE</option>
               <option value="23">TOLIMA</option>
               <option value="24">VALLE DEL CAUCA</option>
               <option value="25">ARAUCA</option>
               <option value="26">CASANARE</option>
               <option value="22">PUTUMAYO</option>
               <option value="28">SAN ANDRES</option>
               <option value="29">AMAZONAS</option>
               <option value="30">GUAINIA</option>
               <option value="31">GUAVIARE</option>
               <option value="32">VAUPES</option>
               <option value="33">VICHADA</option>
           </select>                                      
           <label >Municipio</label>
           <select id="municipio" class="form-control">
               <option value="">Seleccionar...</option>
               <option value="">municipio1</option>
               <option value="">municipio2</option>
               <option value="">municipio3</option>
               <option value="">municipio4</option>
               <option value="">municipio5</option>
               <option value="">municipio6</option>
           </select>
           <label >Direccion</label>
           <input type="text" class="form-control">
           <label >Tipo de peticion</label>
           <select name="" id="" class="form-control">
                <option value="">Seleccionar...</option>
                <option value="">Consulta</option>
                <option value="">Queja</option>
                <option value="">Solicitud de Informacion</option>
                <option value="">Sugerencia</option>
            </select>


            <label >Autorizo bajo mi responsabilidad que la respuesta sea enviada mediante:</label>
            <select name="" id="" class="form-control">
                <option value="">Seleccionar...</option>
                <option value="">Dirección de Correo Electrónico</option>
                <option value="">Dirección de Correspondencia</option>
            </select>
            <label > Mensaje</label>
            <textarea name="" id="" cols="30" rows="5" placeholder="Escribe tu reclamo/sugerencia/solicitud" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-success">Enviar</button>                                      
          </form>

         </div>
    </div>

  </div> 
</section>