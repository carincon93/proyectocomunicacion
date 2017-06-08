<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'My Yii Application';
?>
<?php $this->beginBlock('block1'); ?>

<header>
    <section class="hero">
<!--         <div class="overlay-hero"></div> -->
        <!-- <?= Html::img('@web/images/background.jpg', ['class' => 'hero-img'], ['alt' => 'Background header']) ?> -->
        <!-- <svg class="big-plus-a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.45 577.58"><title>big-plus</title><text transform="translate(129.83 474.39) rotate(-19.33)" style="opacity:0.2;font-size:429.3069763183594px;fill:#fff;stroke:#fff;stroke-miterlimit:10;stroke-width:12px;font-family:ZurichBT-Roman, Zurich BT">+</text></svg> -->
    
        <div class="container">
            <!-- <svg class="big-plus-a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.45 577.58"><title>big-plus</title><text transform="translate(129.83 474.39) rotate(-19.33)" style="opacity:0.2;font-size:429.3069763183594px;fill:#fff;stroke:#fff;stroke-miterlimit:10;stroke-width:12px;font-family:ZurichBT-Roman, Zurich BT">+</text></svg> -->
            <div class="hero-content">
                <div>
                    <h1 class="hero-title animated fadeInUp delay">Red de Conocimiento <br> Gestión de la <span class="hero-span">Producción</span></h1>
                    <p class="animated fadeInUp delay">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam architecto veritatis ducimus corrupti quaerat repudiandae nesciunt repellat sint earum magnam doloribus nam dolorum porro labore omnis fugit ea, iure provident! Nostrum doloremque odit distinctio aspernatur dolorem aliquam cumque beatae enim rerum amet ullam architecto sint, magni, delectus optio, consequatur eos!</p>
                                        
                </div>
                <div class="project-logos">
                </div>
            </div>            
        </div>

            <!-- <div class="owl-carousel-header owl-carousel">
                <div class="owl-header-content">
                    <div class="hero-content">
                        <h1 class="hero-title animated fadeInUp delay">Redes del conocimiento <span class="hero-span">SENA</span></h1>
                    </div> 
                    <?= Html::img('@web/images/background.jpg', ['class' => 'hero-img'], ['alt' => 'Background header']) ?>
                </div>
                <div class="owl-header-content">
                    <?= Html::img('@web/images/header-photo2.jpg', ['class' => 'hero-img'], ['alt' => 'Background header']) ?>
                </div>
            </div> --><!-- /owl-carousel --> 
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
 <aside class="aside-social-networks">
    <nav class="">
        <a href="" class="facebook-link"><i class="fa fa-facebook"></i></a>
        <a href="" class="twitter-link"><i class="fa fa-twitter"></i></a>
        <a href="" class="instagram-link"><i class="fa fa-instagram"></i></a>
        <a href="" class="google-plus-link"><i class="fa fa-google-plus"></i></a>
    </nav>     
 </aside>
    <div class="body-content">

        <!--  -->
        <section class="section project-info-section objetivos">
            <!-- <img class="asset-informacion" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-1.svg" alt=""> -->
            <figure class="plus-a plus-info-section" style="">+</figure>
            <figure class="plus-c plus-info-section" style="font-size: 2rem;">+</figure>
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card-project card-project1 card-project1-border">
                            <h2 class="mision-title">MISIÓN</h2>
                            <p class="text-justify">Articula la respuesta institucional en las áreas temáticas de gestión de operaciones industriales, propendiendo por el logro de estándares internacionales de productividad, garantizando calidad y pertinencia de la formación profesional.</p>                            
                        </div>
                        <div class="card-project card-project3 card-project2-border">
                            <h2 class="mision-title">VISIÓN</h2>
                            <p class="text-justify">Para el año 2020 la Red de Conocimiento de Gestión de la Producción será referente a nivel nacional y en el Sena, en la actualización de diseños curriculares, nuevos programas de formación, capacitación, transferencia tecnológica, innovación y modernización de ambientes. Para el beneficio de la población colombiana y el sector productivo.</p>                            
                        </div>
                    </div>
                    <div class="col-md-6 card-project card-project2 card-project2-border">
                        <div class="">
                            <h2 class="objetivos-title">OBJETIVOS <strong>ESTRATÉGICOS</strong></h2>
                            <ul class="lista-objetivos">
                                <li>Estandarizar los elementos necesarios cambiantes, perfil de instructores, materiales y diseños que garanticen la calidad de la Formación Profesional Integral.</li>
                                <li>Fortalecer el relacionamiento con el sector productivo y gubernamental para diseño e implementación de políticas, estrategias y programas que dinamicen la competitividad y productividad empresarial.</li>
                                <li>Establecer alianzas a nivel internacional para fortalecer las capacidades del talento humano de la Red.</li>
                                <li>Desarrollar actividades que permitan definir las líneas temáticas de los semilleros de investigación para incursionar en la estrategia Sennova y el sector externo, apoyando los centros asociados a la red.</li>
                            </ul>                            
                        </div>                        
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
                <!-- <div class="project-logos">
                    <?= Html::img('@web/images/asset-logos-svg.svg', ['class' => '', 'alt' => 'Sena Logo - Project Logo', 'width' => '30%']) ?>
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
                <div class="owl-carousel owl-carousel-news">
                    <div class="owl-card">
                        <header class="header-card">
                            <?= Html::img('@web/images/120150202082049.jpg', ['class' => ''], ['alt' => 'News']) ?>
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 11/05/2017</h6>
                            <p>Desde el #SENA apostamos a la competitividad de la economía, por eso realizamos taller con mesas productivas para revisar su alcance.</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <?= Html::img('@web/images/C_pbYxRXoAA5Jo2.jpg', ['class' => ''], ['alt' => 'News']) ?>
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 12/05/2017</h6>
                            <p>En el #SENA estamos conectados con las necesidades del sector empresarial en #SanAndrés y con la realidad de los ciudadanos: @MAndreaNieto.</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <?= Html::img('@web/images/C98hpkRXkAICYU9.jpg', ['class' => ''], ['alt' => 'News']) ?>
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 21/04/2017</h6>
                            <p>#CumbreAprendicesSENA Gracias Dirección General tu labor construye país, construye paz #senacomunica @JuantxoSanchez  @MAndreaNieto</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <?= Html::img('@web/images/DAMyzo9UQAET6cY.jpg', ['class' => ''], ['alt' => 'News']) ?>
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 19/05/2017</h6>
                            <p>Consejo Directivo #SENA aprueba entrega de recursos del #FondoEmprenderSENA por más de $38 mil millones. Más empresas y empleos para el país</p>
                        </div>
                    </div>
                    <div class="owl-card">
                        <header class="header-card">
                            <?= Html::img('@web/images/DBkU7QJXcAA4lUI.jpg', ['class' => ''], ['alt' => 'News']) ?>
                        </header>
                        <div class="inner-news">
                            <h6><i class="fa fa-calendar"></i> 05/06/2017</h6>
                            <p>#AEstaHora Aprendices #CineAlSENA de #Chocó comparten conocimiento en un taller práctico con Simón Mesa ganador de la Palma de Oro en Cannes</p>
                        </div>
                    </div>
                </div><!-- /owl-carousel -->

            </div>
        </section>
<!--         <section class="encuestas section">
                <div class="container">
                    <h1 class="text-center">Encuestas <strong>SENA</strong></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ex fugiat est laborum commodi blanditiis et officiis qui fuga error quis eaque sed, praesentium alias amet vel at dicta mollitia rem aliquam, voluptas necessitatibus, temporibus sit nihil vero. Alias, provident!</p>
                
                        
                    <div class="encuesta-card1">
                        <div class="encuesta-inner">
                            <?= Html::img('@web/images/survery-icon.svg', ['class' => '', 'alt' => 'survery-icon', 'width' => '60%']) ?>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo dolore necessitatibus tenetur exercitationem esse, officiis ex sunt magnam adipisci unde velit tempore voluptas voluptates iusto enim, labore impedit. Assumenda fuga rem sapiente accusantium, culpa id, pariatur eum corporis temporibus quas doloremque voluptatibus? Maiores, accusantium incidunt dolor odit quasi nemo facere.</p>
                        </div>
                        <a href="" class=""><span>Link Encuesta 1</span></a>
                    </div>
              
                
                    <a href="" class="btn btne btn-5 btn-5b icon-cart elink"><span>Link Encuesta 2</span></a>
                
                    <a href="" class="btn btne btn-5 btn-5b icon-cart elink"><span>Link Encuesta 3</span></a>
                    
                    
                </div>
        </section> -->

        <section class="encuestas section">
                <div class="container encuestas-wrap">
                    <h1 class="text-center">Encuestas <strong>SENA</strong></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ex fugiat est laborum commodi blanditiis et officiis qui fuga error quis eaque sed, praesentium alias amet vel at dicta mollitia rem aliquam, voluptas necessitatibus, temporibus sit nihil vero. Alias, provident!</p>
                    <!-- <div class="row">
                        <div class="col-md-4">
                            <a href="" class="btn btne btn-5 btn-5b icon-cart elink"><span>Link Encuesta 1</span></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn btne btn-5 btn-5b icon-cart elink"><span>Link Encuesta 2</span></a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn btne btn-5 btn-5b icon-cart elink"><span>Link Encuesta 3</span></a>
                        </div>
                    </div> -->
                    <div>
                        <a href="" class="encuesta-card">
                            <div class="icon-survery-content">
                                <?= Html::img('@web/images/survery-icon.svg', ['class' => 'icon-survery', 'alt' => 'survery-icon']) ?>                            
                            </div>
                            <div>
                                <h3 class="encuesta-title">Titulo de encuesta</h3>
                                <p class="encuesta-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non rem neque assumenda ex expedita eveniet dolorem illo repellendus sit, odit dicta voluptate soluta, debitis aperiam.</p>                                
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="" class="encuesta-card">
                            <div class="icon-survery-content">
                                <?= Html::img('@web/images/survery-icon.svg', ['class' => 'icon-survery', 'alt' => 'survery-icon']) ?>                            
                            </div>
                            <div>
                                <h3 class="encuesta-title">Titulo de encuesta</h3>
                                <p class="encuesta-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non rem neque assumenda ex expedita eveniet dolorem illo repellendus sit, odit dicta voluptate soluta, debitis aperiam.</p>                                
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="" class="encuesta-card">
                            <div class="icon-survery-content">
                                <?= Html::img('@web/images/survery-icon.svg', ['class' => 'icon-survery', 'alt' => 'survery-icon']) ?>                            
                            </div>
                            <div>
                                <h3 class="encuesta-title">Titulo de encuesta</h3>
                                <p class="encuesta-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non rem neque assumenda ex expedita eveniet dolorem illo repellendus sit, odit dicta voluptate soluta, debitis aperiam.</p>                                
                            </div>
                        </a>
                    </div>
                    
                </div>
                <?= Html::img('@web/images/triangle-img.svg', ['class' => 'encuesta-triangle', 'alt' => '']) ?>                         

        </section>
        <section class="galeria section">
            <!-- <div class="galeria-background"></div> -->
            <div class="container">
                <h1 class="text-center">Galería <strong>SENA</strong></h1>
                <div class="row">
                    <div class="col-md-12">
                        <ul id="rig">
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/01.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Lorem Ipsum Dolor</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/02.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/03.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/04.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/05.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/06.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/07.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/08.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/09.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/10.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/11.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/12.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                            <li>
                                <figure class="rig-cell">
                                    <?= Html::img('@web/images/galeria/13.jpg', ['class' => 'rig-img thumbnail gallerybox', 'alt' => 'photo-gallery']) ?>
                                    <span class="rig-overlay"></span>
                                    <span class="rig-text">Consectetur Adipiscing</span>
                                </figure>
                            </li>
                        </ul>
                    </div>                
                </div>
            </div>
        </section>

        <div class="logos section"></div>

    </div> <!-- /body-content -->
</div> <!-- /site-index -->    