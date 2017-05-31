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
        <img class="svg-hero" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-hero.svg" alt="">
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
        <section class="section project-info-section">
            <img class="asset-informacion" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-1.svg" alt="">
            <figure class="plus-a plus-info-section" style="">+</figure>
            <figure class="plus-c plus-info-section" style="font-size: 2rem;">+</figure>
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card-project card-project1 card-project1-border">
                            <h2>MISIÓN</h2>
                            <p>Articula la respuesta institucional en las áreas temáticas de gestión de operaciones industriales, propendiendo por el logro de estándares internacionales de productividad, garantizando calidad y pertinencia de la formación profesional.</p>                            
                        </div>
                        <div class="card-project card-project3 card-project2-border">
                            <h2>VISIÓN</h2>
                            <p>Para el año 2020 la Red de Conocimiento de Gestión de la Producción será referente a nivel nacional y en el Sena, en la actualización de diseños curriculares, nuevos programas de formación, capacitación, transferencia tecnológica, innovación y modernización de ambientes. Para el beneficio de la población colombiana y el sector productivo.</p>                            
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="card-project card-project2 card-project2-border">
                            <h2>OBJETIVOS <strong>ESTRATÉGICOS</strong></h2>
                            <ul class="">
                                <li>Estandarizar los elementos necesarios cambiantes, perfil de instructores, materiales y diseños que garanticen la calidad de la Formación Profesional Integral.</li>
                                <li>Fortalecer el relacionamiento con el sector productivo y gubernamental para diseño e implementación de políticas, estrategias y programas que dinamicen la competitividad y productividad empresarial.</li>
                                <li>Establecer alianzas a nivel internacional para fortalecer las capacidades del talento humano de la Red.</li>
                                <li>Desarrollar actividades que permitan definir las líneas temáticas de los semilleros de investigación para incursionar en la estrategia Sennova y el sector externo, apoyando los centros asociados a la red.</li>
                            </ul>                            
                        </div>                        
                    </div>
<!--                 <div class="project-logos">
                    <img <img src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-logos-svg.svg" alt="" width="30%">                    
                </div> -->

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
                        <div>
                            <h6>11/05/2017</h6>
                            <p>Desde el #SENA apostamos a la competitividad de la economía, por eso realizamos taller con mesas productivas para revisar su alcance.</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/C_pbYxRXoAA5Jo2.jpg" alt="">
                        </header>
                        <div>
                            <h6>12/05/2017</h6>
                            <p>En el #SENA estamos conectados con las necesidades del sector empresarial en #SanAndrés y con la realidad de los ciudadanos: @MAndreaNieto.</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/C98hpkRXkAICYU9.jpg" alt="">
                        </header>
                        <div>
                            <h6>21/04/2017</h6>
                            <p>#CumbreAprendicesSENA Gracias Dirección General tu labor construye país, construye paz #senacomunica @JuantxoSanchez  @MAndreaNieto</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/DAMyzo9UQAET6cY.jpg" alt="">
                        </header>
                        <div>
                            <h6>19/05/2017</h6>
                            <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA por más de $38 mil millones. Más empresas y empleos para el país</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/DAMyzo9UQAET6cY.jpg" alt="">
                        </header>
                        <div>
                            <h6>19/05/2017</h6>
                            <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA por más de $38 mil millones. Más empresas y empleos para el país</p>
                        </div>
                    </div>
                </div><!-- /owl-carousel -->

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

    </div>
</div>


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
