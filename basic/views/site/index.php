<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Red de Conocimiento SENA';
?>
<nav class="sec"></nav>
<!-- <nav class="navbar-index">
    <ul class="navbar-links">
        <li>
            <a href="">Formación</a> 
            <ul class="sub-menu">
                <li><a href="">Redes del Conocimiento</a></li>
                <li><a href="">Evaluación y Certificación por Competencias Laborales</a></li>
                <li><a href="">Técnico</a></li>
                <li><a href="">Tecnólogo</a></li>
            </ul>
        </li>
        <li>
            <a href="">Instructores</a>
            <ul class="sub-menu">
                <li><a href="">Capacitación</a></li>
                <li><a href="">¿Quieres ser Instructor?</a></li>
                <li><a href="">Formación y Convocatorias</a></li>
            </ul>
        </li>
        <li>
            <a href="">Empresarios</a>
            <ul class="sub-menu">
                <li><a href="">Mesas Sectoriales</a></li>
                <li><a href="">Normas de Competencias Laborales</a></li>
                <li><a href="">Laboratorios para innovar</a></li>
                <li><a href="">Solicitudes de Empresarios</a></li>
                <li><a href="">Convocatorias Vigentes</a></li>
            </ul>
        </li>
        <li>
            <a href="">Entidad</a>
            <ul class="sub-menu">
                <li><a id="go-mision" href="javascript:void(0)">Misión y Visión</a></li>
                <li><a href="">Estructura Organizacional</a></li>
                <li><a href="">Planeación Estratégica</a></li>
            </ul>
        </li>
        <li>
            <a id="go-galeria" href="javascript:void(0)">Ambientes</a>
        </li>
        <li>
            <a id="go-formacion" href="javascript:void(0)">Catálogo Información</a>
        </li>
        <li>
            <a href="">Plan Estratégico</a>
            <ul class="sub-menu">
                <li><a href="../views/site/table.html">Plan de Acción</a></li>
                <li><a href="">Plan de Modernizacion Tecnologica</a></li> 
            </ul>
        </li>
        <li>
            <a href="">Example</a>
            <ul class="sub-menu">
                <li><a href="">Contáctanos</a></li>
                <li><a class="pqrs-link" href="javascript:void(0)">PQRS</a></li>
            </ul>
        </li>
        <li class="login-link">
            <a href="javascript:void(0)" class="cd-nav-trigger" >Iniciar Sesión</a>
        </li>
    </ul>
    <div class="login-link">
        <a href="javascript:void(0)" class="cd-nav-trigger" >Iniciar Sesión</a>
    </div>
</nav> -->
<div class="site-index">

    <div class="body-content">

        <div class="social-networks">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-google-plus"></i></a>
        </div>
        <!-- Encabezado -->
        <header class="hero">
            <figure class="overlay">
                <svg class="img-hero" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 769.59 394.99"><title>asset1</title><circle cx="654" cy="195.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="238" cy="385.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="364" cy="18.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="51" cy="27.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="575" cy="376.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="424" cy="223.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="686" cy="325.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="9" cy="136.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="663" cy="18.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="536" cy="103.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><polyline points="535.5 103.49 662.5 18.49 768.5 179.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.20000000298023224;isolation:isolate"/><polyline points="768.5 179.49 654 195.99 536 103.99 364 18.99 51.5 27.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.20000000298023224;isolation:isolate"/><polyline points="769.5 0.49 8.5 137.49 685.5 326.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.10000000149011612;isolation:isolate"/><polyline points="663.5 19.49 652 195.99 574.5 376.49 238.5 386.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.07000000029802322;isolation:isolate"/><polyline points="652.5 196.49 423.5 224.49 574.5 377.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.20000000298023224;isolation:isolate"/><line x1="423.5" y1="224.49" x2="536.5" y2="104.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10"/></svg>
            </figure>
            <div class="container-fluid conocimiento-wrap">                
                    
                <article class="article-conocimiento">
                    <h1>Redes del conocimiento <span class="hero-title">SENA</span></h1>
                    <!-- <img class="redsena-logo" src="<?= Yii::$app->request->baseUrl ?>/imgs/redsena-logo.png"> -->
                    <!-- <p><strong>Descripción: </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit illo rem id molestiae, quaerat, omnis! Quibusdam, enim, ex veniam, architecto sunt quaerat et saepe distinctio odit id atque aliquid animi ad dicta excepturi possimus ea nisi quia recusandae. Neque, nam.</p> -->
                </article>
            
                <img class="" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-red-logo.svg" alt="" width="20%">
                
            </div>
<!--             <div class="triangles">
                <div class="triangles-white"></div>
            </div> -->
        </header>
        <section>
            <div class="info-project">
                <div class="container-fluid">
                    <div class="row">
                        <article class="col-md-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <div class="about-inner">
                                <h1 class=""><strong>MISIÓN</strong></h1>
                                <p class="">Articula la respuesta institucional en las áreas temáticas de gestión de operaciones industriales, propendiendo por el logro de estándares internacionales de productividad, garantizando calidad y pertinencia de la formación profesional.
                                </p>
                            </div>
                        </article>
                        <article class="col-md-4 objetivos">
                            <div class="about-inner">
                                <h1 class="">OBJETIVOS <strong>ESTRATÉGICOS</strong></h1>
                                <ul class="">
                                    <li>* Estandarizar los elementos necesarios cambiantes, perfil de instructores, materiales y diseños que garanticen la calidad de la Formación Profesional Integral.</li>
                                    <li>* Fortalecer el relacionamiento con el sector productivo y gubernamental para diseño e implementación de políticas, estrategias y programas que dinamicen la competitividad y productividad empresarial.</li>
                                    <li>* Establecer alianzas a nivel internacional para fortalecer las capacidades del talento humano de la Red.</li>
                                    <li>* Desarrollar actividades que permitan definir las líneas temáticas de los semilleros de investigación para incursionar en la estrategia Sennova y el sector externo, apoyando los centros asociados a la red.</li>
                                </ul>
                            </div>
                        </article>
                        <article class="col-md-4">                        
                            <div class="about-inner">
                                <h1><strong>VISIÓN</strong></h1>
                                <p>Para el año 2020 la Red de Conocimiento de Gestión de la Producción será referente a nivel nacional y en el Sena, en la actualización de diseños curriculares, nuevos programas de formación, capacitación, transferencia tecnológica, innovación y modernización de ambientes. Para el beneficio de la población colombiana y el sector productivo.</p>
                            </div>
                        </article>
                    </div>
                    <img class="about-logo" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-red-logo.svg" alt="" width="20%">
                </div>
            </div>
        </section>

            <section class="pformacion">
                <div class="container-fluid">
                    <h1 class="text-center ">Programas de <strong>Formación</strong></h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card1">
                                <header>
                                    <h3>Técnicos</h3>
                                </header>
                                <div>
                                    <ul>
                                        <li>Seguridad ocupacional</li>
                                        <li>Alistamiento y operación de maquinaria para la producción industrial</li>
                                        <li>Procesos de manufactura</li>
                                    </ul>
                                </div>                          
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card2">
                                <header>
                                    <h3>Tecnólogos</h3>
                                </header>
                                <div>
                                    <ul>
                                        <li>Gestión integrada de la calidad, medio ambiente, seguridad y salud ocupacional</li>
                                        <li>Gestión de la producción industrial</li>
                                        <li>Gestión de recursos en plantas de producción</li>
                                        <li>Salud ocupacional</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card3">
                                <header>
                                    <h3>Especialización Tecnológica</h3>
                                </header>
                                <div>
                                    <ul>
                                        <li>Gestión en laboratorios de ensayo y calibración - Norma ISO/IEC 17025</li>
                                        <li>Supervisión de buenas prácticas de manufactura</li>
                                    </ul>
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="noticias">
                
                <div class="container">
                    <h1 class="text-center">Noticias <strong>SENA</strong></h1>
                    <i class="fa fa-newspaper-o"></i>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel">
                                <div class="owl-card">
                                    <div class="cover">
                                        <img class="img img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/C98hpkRXkAICYU9.jpg">                                    
                                    </div>
                                    <div class="inner-news">
                                        <h6>21/04/2017</h6>
                                        <p>#CumbreAprendicesSENA Gracias Dirección General tu labor construye país, construye paz #senacomunica @JuantxoSanchez  @MAndreaNieto</p>
                                    </div>
                                </div>
                                <div class="owl-card">
                                    <div class="cover">
                                        <img class="img img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/120150202082049.jpg">
                                    </div>
                                   <div class="inner-news">
                                        <h6>11/05/2017</h6>
                                        <p>Desde el #SENA apostamos a la competitividad de la economía, por eso realizamos taller con mesas productivas para revisar su alcance.</p>
                                    </div>
                                </div>
                                <div class="owl-card">
                                    <div class="cover">
                                        <img class="img img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/C_pbYxRXoAA5Jo2.jpg">                                    
                                    </div>
                                    <div class="inner-news">
                                        <h6>12/05/2017</h6>
                                        <p>En el #SENA estamos conectados con las necesidades del sector empresarial en #SanAndrés y con la realidad de los ciudadanos: @MAndreaNieto.</p>
                                    </div>
                                </div>
                                <div class="owl-card">
                                    <div class="cover">
                                        <img class="img img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/as1.jpg">                                    
                                    </div>
                                    <div class="inner-news">
                                        <h6>12/05/2017</h6>
                                        <p>#EstudiaEnElSENA porque además de formarte técnicamente nos interesamos por brindarte #Bienestar @SENAComunica @MAndreaNieto.</p>
                                    </div>
                                </div>
                                <div class="owl-card">
                                    <div class="cover">
                                        <img class="img img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/DAMyzo9UQAET6cY.jpg">                                    
                                    </div>
                                    <div class="inner-news">
                                        <h6>19/05/2017</h6>
                                        <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA por más de $38 mil millones. Más empresas y empleos para el país</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
           
                    </div>
                </div>
                
            </section>
            <section class="encuestas">
                <div class="container">
                    <h1 class="text-center">Encuestas <strong>SENA</strong></h1>
                    <i class="fa fa-file-text-o"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ex fugiat est laborum commodi blanditiis et officiis qui fuga error quis eaque sed, praesentium alias amet vel at dicta mollitia rem aliquam, voluptas necessitatibus, temporibus sit nihil vero. Alias, provident!</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <a href="" class="btn btn-5 btn-5b icon-cart elink"><span>Link Encuesta 1</span></a>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <a href="" class="btn btn-5 btn-5b icon-cart elink"><span>Link Encuesta 2</span></a>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <a href="" class="btn btn-5 btn-5b icon-cart elink"><span>Link Encuesta 3</span></a>
                        </div>
                    </div>
                    
                </div>
            </section>

            <section class="galeria">
                <h1 class="text-center">Galería <strong>SENA</strong></h1>
                <div class="container">

                    <div class="row">
                        <div class="col-md-8">
                            <ul id="sb-slider" class="sb-slider">
                                <li>
                                    <a target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/imgs/1.jpg" alt="image1"/></a>                          
                                </li>
                                <li>
                                    <a  target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/imgs/2.jpg" alt="image2"/></a>                         
                                </li>
                                <li>
                                    <a  target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/imgs/3.jpg" alt="image1"/></a>                         
                                </li>
                                <li>
                                    <a  target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/imgs/4.jpg" alt="image1"/></a>                         
                                </li>
                                <li>
                                    <a  target="_blank"><img src="<?= Yii::$app->request->baseUrl ?>/imgs/5.jpg" alt="image1"/></a>
                                </li>
                                </li>
                            </ul>

                            <div id="shadow" class="shadow"></div>

                            <div id="nav-arrows" class="nav-arrows">
                                <a href="#">Next</a>
                                <a href="#">Previous</a>
                            </div>

                            <div id="nav-options" class="nav-options">
                                <span id="navPlay">Play</span>
                                <span id="navPause">Pause</span>
                            </div>                      
                        </div>
                         <nav class="col-md-4 cl-effect-16" id="cl-effect-16">
                            <li><a href="#cl-effect-16" data-hover="Trabajo en Alturas">Trabajo en Alturas</a></li>
                            <li><a href="#cl-effect-16" data-hover="Química">Química</a></li>
                            <li><a href="#cl-effect-16" data-hover="Gestión de la Producción">Gestión de la Producción</a></li>
                            <li><a href="#cl-effect-16" data-hover="Gestión Integrada de la Calidad">Gestión Integrada de la Calidad</a></li>
                            <li><a href="#cl-effect-16" data-hover="Salud Ocupacional">Salud Ocupacional</a></li>
                        </nav> 
                        

                    </div>
                
                </div>
            </section>


    <!-- --Login-- -->

    <div class="login cd-primary-nav">
        <a href="javascript:void(0)" class="cd-nav-trigger fa fa-times trigger-times"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="form">
                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'layout' => 'horizontal',
                            'fieldConfig' => [
                                'template' => "{label}\n<div class=\"\">{input}</div>\n<div class=\"\">{error}</div>",
                                'labelOptions' => ['class' => 'col-lg-1 control-label'],
                            ],
                        ]); ?>
                            <div class="form-wrap">
                                <div class="login-inputs">
                                    <?= $form->field($model, 'email', ['labelOptions' => [ 'class' => 'your_custom_class_name' ]])->input('email') ?>
                                    <?= $form->field($model, 'password', ['labelOptions' => [ 'class' => 'your_custom_class_name' ]])->passwordInput() ?>
                                    <?= $form->field($model, 'rememberMe')->checkbox([
                                        'template' => "<div class=\"\">{input} {label}</div>\n<div class=\"\">{error}</div>",
                                    ]) ?>
                                </div>
                                <div class="2">
                                    <?= Html::submitButton('Iniciar Sesión', ['class' => '', 'name' => 'login-button']) ?>
                                </div>
                            </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>          
        </div>
    </div>
    <div class="cd-overlay-nav">
        <span></span>
    </div>

    <div class="cd-overlay-content">
        <span></span>
    </div>
    <!-- /Login -->

    </div> <!-- /body-content -->
</div> <!-- /site-index -->



    <section class="pqrs">
        <div class="container">
            <i class="fa fa-close trigger-times" style="float: right; font-size: 2rem;"></i>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-6">
                                <label for=""> Nombres y Apellidos</label>
                                <input type="text" placeholder="Juan Camilo Mojica">
                                <label for="">Correo ELectronico</label>
                                <input type="email" placeholder="Example@hotmail.com">
                                 
                                <label for=""> Tipo De Documento</label>
                                <select name="tipo_doc" id="">
                                    <option value="">Seleccione...</option>
                                    <option value="">cedula de ciudadania(C.C)</option>
                                    <option value="">cedula de ciudadania(C.C)</option>
                                    <option value="">cedula de ciudadania(C.C)</option>
                                    <option value="">tarjeta de identificacion(T.I)</option>
                                </select>
                                <label for="">Numero de Documento</label>
                                <input type="text" placeholder="103010202">
                                <label for=""> Telefono </label>
                                <input type="text" placeholder="8919283">
                                <label for=""> Celular </label>
                                <input type="text" placeholder="3136975013">
                                <label for="">Departamento</label>
                                <select id="estado" name="estado" class="required">
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
                            </div>
                            <div class="login-inputs col-md-6">                              
                                
                                <label for="">Municipio</label>
                                <select id="municipio"></select><br>

                                <label for="">Direccion</label>
                                <input type="text" placeholder="mzn 30 cs 82">
                                <label for="">Tipo de peticion</label>
                                <select name="" id="">
                                    <option value="">seleccionar...</option>
                                    <option value="">Consulta</option>
                                    <option value="">Queja</option>
                                    <option value="">Queja</option>
                                    <option value="">Solicitud de Informacion</option>
                                    <option value="">Sugerencia</option>
                                </select><br>
                                <label for="">Autorizo bajo mi responsabilidad que la respuesta sea enviada mediante:</label>
                                <select name="" id="">
                                    <option value="">seleccionar...</option>
                                    <option value="">Direccion de Correo Electronico</option>
                                    <option value="">Direccion de Correspondencia</option>
                                </select><br>
                                <label for=""> Mensaje</label>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Escribe tu reclamo/sugerencia/solicitud"></textarea><br>
                                <div class="2">
                                    <button type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>          
                  
                    </form>
                </div>
            </div>            
        </div>     
    </section>