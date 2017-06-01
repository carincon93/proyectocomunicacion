<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'My Yii Application';
?>
<?php $this->beginBlock('block1'); ?>

<header>
    <section class="hero">
        <img class="hero-img" src="<?= Yii::$app->request->baseUrl ?>/imgs/background.jpg" alt="" width="100%">
        <!-- <img class="svg-hero" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-hero.svg" alt=""> -->
        <svg class="big-plus-a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.45 577.58"><title>big-plus</title><text transform="translate(129.83 474.39) rotate(-19.33)" style="opacity:0.2;font-size:429.3069763183594px;fill:#fff;stroke:#fff;stroke-miterlimit:10;stroke-width:12px;font-family:ZurichBT-Roman, Zurich BT">+</text></svg>
        <!-- <svg class="big-plus-b" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.45 577.58"><title>big-plus</title><text transform="translate(129.83 474.39) rotate(-19.33)" style="opacity:0.2;font-size:429.3069763183594px;fill:#fff;stroke:#fff;stroke-miterlimit:10;stroke-width:12px;font-family:ZurichBT-Roman, Zurich BT">+</text></svg> -->

        <div class="hero-content">
            <h1 class="hero-title animated fadeInUp delay">Redes del conocimiento <span class="hero-span">SENA</span></h1>
            <!-- <img class="" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-red-logo.svg" alt="" width="20%"> -->
        </div>
    </section>    
</header>


<?php $this->endBlock(); ?>
<div class="site-index">

    <!-- <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
 -->
    <div class="body-content">

        <!--  -->
        <section class="section project-info-section objetivos">
            <!-- <img class="asset-informacion" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-1.svg" alt=""> -->
            <figure class="plus-a plus-info-section" style="">+</figure>
            <figure class="plus-c plus-info-section" style="font-size: 2rem;">+</figure>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card-project card-project1 card-project1-border">
                            <h2>MISIÓN</h2>
                            <p>Articula la respuesta institucional en las áreas temáticas de gestión de operaciones industriales, propendiendo por el logro de estándares internacionales de productividad, garantizando calidad y pertinencia de la formación profesional.</p>                            
                        </div>                        
                    </div>
                    <div class="col-md-4 card-project card-project2 card-project2-border">
                        <div class="">
                            <h2>OBJETIVOS <strong>ESTRATÉGICOS</strong></h2>
                            <ul class="lista-objetivos">
                                <li>Estandarizar los elementos necesarios cambiantes, perfil de instructores, materiales y diseños que garanticen la calidad de la Formación Profesional Integral.</li>
                                <li>Fortalecer el relacionamiento con el sector productivo y gubernamental para diseño e implementación de políticas, estrategias y programas que dinamicen la competitividad y productividad empresarial.</li>
                                <li>Establecer alianzas a nivel internacional para fortalecer las capacidades del talento humano de la Red.</li>
                                <li>Desarrollar actividades que permitan definir las líneas temáticas de los semilleros de investigación para incursionar en la estrategia Sennova y el sector externo, apoyando los centros asociados a la red.</li>
                            </ul>                            
                        </div>                        
                    </div>
                    <div class="col-md-4">
                        <div class="card-project card-project3 card-project2-border">
                            <h2>VISIÓN</h2>
                            <p>Para el año 2020 la Red de Conocimiento de Gestión de la Producción será referente a nivel nacional y en el Sena, en la actualización de diseños curriculares, nuevos programas de formación, capacitación, transferencia tecnológica, innovación y modernización de ambientes. Para el beneficio de la población colombiana y el sector productivo.</p>                            
                        </div>
                    </div>
                </div>
                <div class="project-logos">
                    <img <img src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-logos-svg.svg" alt="" width="30%">                    
                </div>
            </div>
        </section>

        <!--  -->
        <section class="programas-formacion-section section">
            <figure class="plus-b plus-formacion-section" style="font-size: 8rem;">+</figure>
            <div class="container">

                <h1 class="text-center title-white">Programas de <strong>Formación</strong></h1>
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

        <!-- Noticias -->
        <section class="section">
            <div class="container">
                
                <h1 class="text-center ">Noticias <strong>SENA</strong></h1>
                <div class="owl-carousel">
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/120150202082049.jpg" alt="">
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 11/05/2017</h6>
                            <p>Desde el #SENA apostamos a la competitividad de la economía, por eso realizamos taller con mesas productivas para revisar su alcance.</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/C_pbYxRXoAA5Jo2.jpg" alt="">
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 12/05/2017</h6>
                            <p>En el #SENA estamos conectados con las necesidades del sector empresarial en #SanAndrés y con la realidad de los ciudadanos: @MAndreaNieto.</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/C98hpkRXkAICYU9.jpg" alt="">
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 21/04/2017</h6>
                            <p>#CumbreAprendicesSENA Gracias Dirección General tu labor construye país, construye paz #senacomunica @JuantxoSanchez  @MAndreaNieto</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/DAMyzo9UQAET6cY.jpg" alt="">
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 19/05/2017</h6>
                            <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA por más de $38 mil millones. Más empresas y empleos para el país</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/DAMyzo9UQAET6cY.jpg" alt="">
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 19/05/2017</h6>
                            <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA por más de $38 mil millones. Más empresas y empleos para el país</p>
                        </div>
                    </div>
                </div><!-- /owl-carousel -->

            </div>
        </section>
        <section class="encuestas section">
                <div class="container">
                    <h1 class="text-center">Encuestas <strong>SENA</strong></h1>
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
        <section class="galeria section">
                <div class="container">
                    <h1 class="text-center">Galería <strong>SENA</strong></h1>
                    <div class="row">
                        <div class="col-md-12">

                            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
                                <!-- Loading Screen -->
                                <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('imgs/galeria/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
                                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/01.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/01-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/02.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/02-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/03.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/03-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/04.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/04-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/05.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/05-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/06.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/06-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/07.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/07-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/08.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/08-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/09.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/09-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/10.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/10-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/11.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/11-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/12.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/12-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/13.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/13-s99x66.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/14.jpg" />
                                        <img data-u="thumb" src="<?= Yii::$app->request->baseUrl ?>/imgs/galeria/14-s99x66.jpg" />
                                    </div>
                                    <a data-u="any" href="https://www.jssor.com" style="display:none">slider bootstrap</a>
                                </div>
                                <!-- Thumbnail Navigator -->
                                <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
                                    <!-- Thumbnail Item Skin Begin -->
                                    <div data-u="slides" style="cursor: default;">
                                        <div data-u="prototype" class="p">
                                            <div class="w">
                                                <div data-u="thumbnailtemplate" class="t"></div>
                                            </div>
                                            <div class="c"></div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Item Skin End -->
                                </div>
                                <!-- Arrow Navigator -->
                                <span data-u="arrowleft" class="jssora05l" style="top:0px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
                                <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
                            </div>                      

                        </div>                
                    </div>
                </div>
            </section>
            <!-- <section class="pqrs">
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
            </section> -->

    </div> <!-- /body-content -->
</div> <!-- /site-index -->


    <!-- Login -->

    <div class="login cd-primary-nav">
        <i class="cd-nav-trigger fa fa-times trigger-times"></i>
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
                                    <?= $form->field($model, 'email', ['template' => '{beginLabel}Correo Electrónico{endLabel}{input}<span class="focus-border"></span>'])->input('email', ['class' => 'form-control effect-1']) ?>
                                    <?= $form->field($model, 'password', ['template' => '{beginLabel}Contraseña{endLabel}{input}<span class="focus-border"></span>'])->input('password', ['class' => 'form-control effect-1']) ?>
                                    <?= $form->field($model, 'rememberMe')->checkbox([
                                        'template' => "<div class=\"\">{input} {label}</div>\n<div class=\"\">{error}</div>",
                                    ])->label('Recuérdame') ?>
                                </div>
                                <div class="2">
                                    <?= Html::submitButton('Iniciar Sesión', ['class' => 'login-button', 'name' => 'login-button']) ?>
                                </div>
                            </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>          
        </div>
    </div><!-- /login -->
    <!-- Overlay -->
    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <div class="cd-overlay-content">
        <span></span>
    </div>
    