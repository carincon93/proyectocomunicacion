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
<?php $this->beginBlock('block2'); ?>

<header>
    <section class="hero-table">
        <svg class="big-plus-a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.45 577.58"><title>big-plus</title><text transform="translate(129.83 474.39) rotate(-19.33)" style="opacity:0.2;font-size:429.3069763183594px;fill:#fff;stroke:#fff;stroke-miterlimit:10;stroke-width:12px;font-family:ZurichBT-Roman, Zurich BT">+</text></svg>

        <div class="hero-content">
            <h1 class="hero-title-table animated fadeInUp delay text-center"> <span>PQRS</span></h1>
            <!-- <img class="" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-red-logo.svg" alt="" width="20%"> -->
        </div>
    </section>    
</header>
    <section class="pqrs">
        <div class="container">
            <div class="row">
                <br><br>
                <form>
                    <div class="col-md-4">
                        <label >Nombre Completo</label>
                        <input type="text" class="form-control">
                        <label >Correo Electronico</label>
                        <input type="email" class="form-control">
                        <label > Tipo De Documento</label>
                        <select name="tipo_doc" id="" class="form-control">
                            <option value="">Seleccione...</option>
                            <option value="">cedula de ciudadania(C.C)</option>
                            <option value="">tarjeta de identificacion(T.I)</option>
                        </select>
                        <label >Numero de Documento</label>
                        <input type="text" class="form-control">
                        <label > Telefono </label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label > Celular </label>
                        <input type="text" class="form-control">
                        <label >Departamento</label>
                        <select id="estado" name="estado" class="required form-control">
                           <option value="">Seleccione...</option>
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
                           <option value="">Seleccione...</option>
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
                            <option value="">seleccionar...</option>
                            <option value="">Consulta</option>
                            <option value="">Queja</option>
                            <option value="">Solicitud de Informacion</option>
                            <option value="">Sugerencia</option>
                        </select>
                   </div>

                   <div class="col-md-4">
                        <label >Autorizo bajo mi responsabilidad que la respuesta sea enviada mediante:</label>
                        <select name="" id="" class="form-control">
                            <option value="">seleccionar...</option>
                            <option value="">Direccion de Correo Electronico</option>
                            <option value="">Direccion de Correspondencia</option>
                        </select>
                        <label > Mensaje</label>
                        <textarea name="" id="" cols="30" rows="5" placeholder="Escribe tu reclamo/sugerencia/solicitud" class="form-control"></textarea><br>
                        <button type="submit" class="btn btn-success">Enviar</button>

                    </div>
                                          
                </form>
            </div>
        </div>     
    </section>
<?php $this->endBlock(); ?>
    
</body>
</html>