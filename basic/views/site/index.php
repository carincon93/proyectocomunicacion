<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>


    <header class="jumbotron jumbotron-index">
        <nav class="social-networks-right">
            <a href="" class="facebook-link"><i class="fa fa-facebook fa-2x"></i></a>
            <a href="" class="twitter-link"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="" class="instagram-link"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="" class="google-plus-link"><i class="fa fa-google-plus fa-2x"></i></a>
        </nav>
        <div class="container">

            <h1>Red de Conocimiento <br>Gestión de la Producción</h1>

            <!-- <p class="lead">You have successfully created your Yii-powered application.</p> -->
            <div class="jumbotron-anchors">
                <a href="javascript:void(0)"  id="go-galeria"><i class="fa fa-picture-o fa-2x"></i> Ir a la galería ambientes</a>
                <a href="javascript:void(0)" id="go-formacion"><i class="fa fa-list-alt fa-2x"></i> Ir al catálogo de información</a>
            </div>

        </div>
    </header>

    <div class="body-content">

        <section class="objetivos-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 text-justify">
                        <div class="objetivos-wrap">
                            <h2>Misión</h2>

                            <p>Articula la respuesta institucional en las áreas temáticas de gestión de operaciones industriales, 
                               propendiendo por el logro de estándares internacionales de productividad, garantizando calidad y pertinencia 
                               de la formación profesional.</p>

                        </div>
                        <div class="objetivos-wrap">
                            <h2>Visión</h2>                            

                            <p>Para el año 2020 la Red de Conocimiento de Gestión de la Producción será referente a nivel nacional y en el 
                            Sena, en la actualización de diseños curriculares, nuevos programas de formación, capacitación, transferencia 
                            tecnológica, innovación y modernización de ambientes. Para el beneficio de la población colombiana y el sector 
                            productivo.</p>

                        </div>
                    </div>
                    <div class="col-lg-7 text-justify">
                        <div class="objetivos-wrap lista-objetivos-section">
                            <h2>Objetivos <span style="color: #fc7323">Estratégicos</span></h2>

                            <ul class="text-justify">
                                <li>Estandarizar los elementos necesarios cambiantes, perfil de instructores, materiales y diseños que garanticen la calidad de la Formación Profesional Integral.</li>
                                <li>Fortalecer el relacionamiento con el sector productivo y gubernamental para diseño e implementación de políticas, estrategias y programas que dinamicen la competitividad y productividad empresarial.</li>
                                <li>Establecer alianzas a nivel internacional para fortalecer las capacidades del talento humano de la Red.</li>
                                <li>Desarrollar actividades que permitan definir las líneas temáticas de los semilleros de investigación para incursionar en la estrategia Sennova y el sector externo, apoyando los centros asociados a la red.</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="objetivos-wrap">
                            <h2>Objetivos Estratégicos</h2>

                            <ul class="text-justify">
                                <li>Estandarizar los elementos necesarios cambiantes, perfil de instructores, materiales y diseños que garanticen la calidad de la Formación Profesional Integral.</li>
                                <li>Fortalecer el relacionamiento con el sector productivo y gubernamental para diseño e implementación de políticas, estrategias y programas que dinamicen la competitividad y productividad empresarial.</li>
                                <li>Establecer alianzas a nivel internacional para fortalecer las capacidades del talento humano de la Red.</li>
                                <li>Desarrollar actividades que permitan definir las líneas temáticas de los semilleros de investigación para incursionar en la estrategia Sennova y el sector externo, apoyando los centros asociados a la red.</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            
            </div>
        </section>
        <section class="noticias">
            <div class="container">
                <hr>
                <h2 class="text-center section-title">Noticias de la <strong>Red</strong></h2>
                <p class="text-center encuestas-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo saepe sit numquam, facere excepturi pariatur 
                esse nostrum, at architecto. Rem, quod molestias. Doloribus nulla animi itaque suscipit, ipsa minima iusto quaerat 
                quis odit enim maxime velit iure quidem.</p>
                <div class="owl-carousel">

                    <div>
                        <div class="thumbnail">
                            <?= Html::img('@web/images/120150202082049.jpg', ['alt' => 'photo-news']) ?>
                            <div class="caption caption-news">
                                <h3><small><i class="fa fa-calendar"></i> 11/05/2017</small></h3>
                                <p>Desde el #SENA apostamos a la competitividad de la economía, por eso realizamos taller con mesas productivas para revisar su alcance.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="thumbnail">
                            <?= Html::img('@web/images/DAMyzo9UQAET6cY.jpg', ['alt' => 'photo-news']) ?>
                            <div class="caption caption-news">
                                <h3><small><i class="fa fa-calendar"></i> 11/05/2017</small></h3>
                                <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA por más de $38 mil millones. Más empresas y empleos para el país</p>
                                
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="thumbnail">
                            <?= Html::img('@web/images/C98hpkRXkAICYU9.jpg', ['alt' => 'photo-news']) ?>
                            <div class="caption caption-news">
                                <h3><small><i class="fa fa-calendar"></i> 11/05/2017</small></h3>
                                <p>#CumbreAprendicesSENA Gracias Dirección General tu labor construye país, construye paz #senacomunica @JuantxoSanchez  @MAndreaNieto</p>
                                
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="thumbnail">
                            <?= Html::img('@web/images/C98hpkRXkAICYU9.jpg', ['alt' => 'photo-news']) ?>
                            <div class="caption caption-news">
                                <h3><small><i class="fa fa-calendar"></i> 11/05/2017</small></h3>
                                <p>#CumbreAprendicesSENA Gracias Dirección General tu labor construye país, construye paz #senacomunica @JuantxoSanchez  @MAndreaNieto</p>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>                
            </div>
        </section>
        <section class="programas-formacion">
            <div class="container">
                <h2 class="text-center section-title">Programas de Formación</h2>
                <p class="text-center encuestas-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo saepe sit numquam, facere excepturi pariatur 
                esse nostrum, at architecto. Rem, quod molestias. Doloribus nulla animi itaque suscipit, ipsa minima iusto quaerat 
                quis odit enim maxime velit iure quidem.</p>
                <div class="row">                    
                    <div class="col-lg-4">
                        <div class="programas-card">
                            <div class="container-icon-graduation">
                                <i class="fa fa-graduation-cap fa-3x"></i>
                            </div>
                            <h3>Técnicos</h3>
                            <div class="listas-programas-container">
                                <ul class="listas-programas">
                                    <?php foreach ($pformacion as $dataFormacion): ?>
                                        <?php if ($dataFormacion['tipoFormacion'] == 'Técnico'): ?>
                                            <li><?= $dataFormacion['nombrePrograma'] ?></li>                                            
                                        <?php endif ?>                                        
                                    <?php endforeach ?>
                                </ul>                                
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-4">
                        <div class="programas-card">
                            <div class="container-icon-graduation">
                                <i class="fa fa-graduation-cap fa-3x"></i>
                            </div>
                            <h3>Tecnólogos</h3>
                            <div class="listas-programas-container">
                                <ul class="listas-programas">
                                    <?php foreach ($pformacion as $dataFormacion): ?>
                                        <?php if ($dataFormacion['tipoFormacion'] == 'Tecnólogo'): ?>
                                            <li><?= $dataFormacion['nombrePrograma'] ?></li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </ul>                                
                            </div>                            
                        </div>                        
                    </div>
                    <div class="col-lg-4">
                        <div class="programas-card">
                            <div class="container-icon-graduation">
                                <i class="fa fa-graduation-cap fa-3x"></i>
                            </div>
                            <h3>Especialización Tecnológica</h3>
                            <div class="listas-programas-container">
                                <ul class="listas-programas">
                                    <?php foreach ($pformacion as $dataFormacion): ?>
                                        <?php if ($dataFormacion['tipoFormacion'] == 'Tecnólogo'): ?>
                                            <li><?= $dataFormacion['nombrePrograma'] ?></li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </ul>                                
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <?= Html::img('@web/images/plus-figure.svg', ['class' => 'figure-encuestas']) ?>
        </section>
        <section class="encuestas-section">
            <div class="container">
                <h2 class="text-center section-title">Encuestas</h2>
                <p class="text-center encuestas-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo saepe sit numquam, facere excepturi pariatur 
                esse nostrum, at architecto. Rem, quod molestias. Doloribus nulla animi itaque suscipit, ipsa minima iusto quaerat 
                quis odit enim maxime velit iure quidem.</p>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="encuesta-card">
                            <h4 class="text-center">Título de encuesta</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint natus repellendus doloribus fugit architecto inventore 
                            quibusdam commodi cum, facere, quisquam. Adipisci optio maxime iure dolore.</p>
                            <a href="" class="survery-link">Ir a la encuesta</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="encuesta-card">
                            <h4 class="text-center">Título de encuesta</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint natus repellendus doloribus fugit architecto inventore 
                            quibusdam commodi cum, facere, quisquam. Adipisci optio maxime iure dolore.</p>
                            <a href="" class="survery-link">Ir a la encuesta</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="encuesta-card">
                            <h4 class="text-center">Título de encuesta</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint natus repellendus doloribus fugit architecto inventore 
                            quibusdam commodi cum, facere, quisquam. Adipisci optio maxime iure dolore.</p>
                            <a href="" class="survery-link">Ir a la encuesta</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="gallery-section">
            <div class="container">
                    <h1 class="text-center section-title">Galería <strong>SENA</strong></h1>
                    <div class="row">
                        <div class="col-md-12">

                            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
                                <!-- Loading Screen -->
                                <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('images/gallery/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
                                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
                                    <div>
                                        <?= Html::img('@web/images/gallery/01.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/01.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/02.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/02.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/03.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/03.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/04.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/04.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/05.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/05.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/06.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/06.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/07.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/07.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/08.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/08.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/09.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/09.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/10.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/10.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/11.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/11.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/12.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/12.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/13.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/13.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
                                    </div>
                                    <div>
                                        <?= Html::img('@web/images/gallery/14.jpg', ['data-u' => 'image', 'alt' => 'photo-gallery']) ?>
                                        <?= Html::img('@web/images/gallery/14.jpg', ['data-u' => 'thumb', 'alt' => 'thumb-gallery']) ?>
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

    </div>

    <?php $this->beginBlock('footer-index'); ?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                
                <div class="col-md-7">
                    <h4 > INFORMACIÓN </h4>
                    <ul class="list-unstyled">
                        <li>Servicio Nacional de Aprendizaje SENA</li>
                        <li>Regional Distrito Capital</li>
                        <li>
                            Centro de Gestión Industrial
                        </li>
                        <li>
                            <address>Dirección: Calle 15 No 31 - 42</address>
                        </li>
                        <li>
                            <span>Ciudad: </span> Bogotá – Colombia
                        </li>
                        <li>
                            <a href="mailto:redproduccionsena@gmail.com">Correo Electrónico: redproduccionsena@gmail.com</a>
                        </li>
                        <li>
                            <a href="tel://5925555">Líneas Gratuitas Atención al Ciudadano: Bogotá (57 1) 592 55 55</a>
                        </li>
                        <li>
                            <a href="tel://018000910270">Resto del país: 01 8000 910270</a>
                        </li>
                        <li>
                            <a href="tel://4049494">Líneas Gratuitas Atención al Empresario: Bogotá (57 1) 404 94 94</a>
                        </li>
                        <li>
                            <a href="tel://018000910682">Resto del país: 01 8000 910682</a>
                        </li>
                    </ul>            
                </div>
                <div class="col-md-5 certificados">
                    
                    <?= Html::img('@web/images/icontecA.png', ['alt' => 'img-footer']) ?>
               
                    <?= Html::img('@web/images/icontecB.png', ['alt' => 'img-footer']) ?>

                    <?= Html::img('@web/images/icontecC.png', ['alt' => 'img-footer']) ?>        
               
                    <?= Html::img('@web/images/icontecD.png', ['alt' => 'img-footer']) ?>
                             
                </div>
            </div>

            <hr>
            <a href="javascript:void(0)" class="back-to-top animated">
                <i class="fa fa-angle-up"></i>
            </a>
            <nav class="footer-social-networks">
                <a href="" data-toggle="tooltip" title="Facebook" class="facebook-link"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="" data-toggle="tooltip" title="Twitter" class="twitter-link"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="" data-toggle="tooltip" title="Instagram" class="instagram-link"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="" data-toggle="tooltip" title="Google +" class="google-plus-link"><i class="fa fa-google-plus fa-2x"></i></a>
            </nav>  
            <p class="">&copy; Todos los derechos reservados <?= date('Y') ?></p>

        </div>
    </footer>
    <?php $this->endBlock(); ?>


<?php 
    $this->registerJsFile(
        '@web/js/jssor.slider-24.0.2.min.js',
        ['depends' => [\yii\web\JqueryAsset::className()]]
    );
?>