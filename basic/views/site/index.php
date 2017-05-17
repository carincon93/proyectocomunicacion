<?php

/* @var $this yii\web\View */

$this->title = 'Red de Conocimiento SENA';
?>
<header class="hero">
    <div class="overlay">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 769.59 394.99"><title>asset1</title><circle cx="654" cy="195.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="238" cy="385.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="364" cy="18.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="51" cy="27.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="575" cy="376.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="424" cy="223.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="686" cy="325.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="9" cy="136.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="663" cy="18.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><circle cx="536" cy="103.99" r="9" style="fill:#23b276;opacity:0.10000000149011612;isolation:isolate"/><polyline points="535.5 103.49 662.5 18.49 768.5 179.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.20000000298023224;isolation:isolate"/><polyline points="768.5 179.49 654 195.99 536 103.99 364 18.99 51.5 27.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.20000000298023224;isolation:isolate"/><polyline points="769.5 0.49 8.5 137.49 685.5 326.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.10000000149011612;isolation:isolate"/><polyline points="663.5 19.49 652 195.99 574.5 376.49 238.5 386.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.07000000029802322;isolation:isolate"/><polyline points="652.5 196.49 423.5 224.49 574.5 377.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10;opacity:0.20000000298023224;isolation:isolate"/><line x1="423.5" y1="224.49" x2="536.5" y2="104.49" style="fill:none;stroke:#23b276;stroke-miterlimit:10"/></svg>
    </div>
    <div class="container-fluid conocimiento-wrap">
        <article class="article-conocimiento">
            <img class="redsena-logo" src="<?= Yii::$app->request->baseUrl ?>/imgs/redsena-logo.png">
            <p><strong>Descripción</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit illo rem id molestiae, quaerat, omnis! Quibusdam, enim, ex veniam, architecto sunt quaerat et saepe distinctio odit id atque aliquid animi ad dicta excepturi possimus ea nisi quia recusandae. Neque, nam.</p>
        </article>
    </div>
    <div class="triangles">
        <div class="triangles-white"></div>
    </div>
</header>
<div class="site-index">

    <div class="body-content">

        <section>
            <div id="about-section" class="info">
                <div class="container">
                    <div class="row">
                        <article class="col-md-6 p">
                            <div class="about-inner">
                                <h1 class="text-center "">Sobre <strong class="stitle2">Nosotros</strong></h1>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium veniam quae rerum nemo deleniti aliquam sint aperiam possimus illo? Inventore repellat eius nihil minima reiciendis a id, vel, consequuntur obcaecati, cupiditate perspiciatis. Alias dicta nobis, sint tenetur, exercitationem voluptate consectetur ipsam facilis, numquam eum, animi enim cumque minima. Cupiditate, laudantium!</p>
                            </div>  
                        </article>
                        <article class="col-md-4 slider">
                            <div class="about-inner mision">
                                <h1 class="text-center " data-scrollreveal="enter right over 3s after 2.5s">Nuestra <strong class="stitle2">Mision</strong></h1>
                                <p class="">Articula la respuesta institucional en las áreas temáticas de gestión de operaciones industriales, propendiendo por el logro de estándares internacionales de productividad, garantizando calidad y pertinencia de la formación profesional.
                                </p>
                                <button class="btn btn-default text-center" id="btnVision">Vision</button>

                            </div>
                            <div class="about-inner vision">
                                <h1 class="text-center ">Nuestra <strong class="stitle2">Visión</strong></h1>
                                <p class="">Para el año 2020 la Red de Conocimiento de Gestión de la Producción será referente a nivel nacional y en el Sena, en la actualización de diseños curriculares, nuevos programas de formación, capacitación, transferencia tecnológica, innovación y modernización de ambientes. Para el beneficio de la población colombiana y el sector productivo.</p>
                                <button class="btn btn-default text-center" id="btnMision">Mision</button>

                            </div>
                        </article>      
                    </div>
                </div>
            </div>
        </section>

        <section class="pformacion">
            <div class="container-fluid">
                <h1 class="text-center ptitle">Programas de <strong class="stitle2">Formación</strong></h1>
                <i class="splitter-news"></i>
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
                                    <li>Gestión intefrada de la calidad, medio ambiente, seguridad y salud ocupacional</li>
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
                <div class="circles">
                    <div class="circles-white"></div>
                </div>
            </div>
            <!-- <div class="container">
                <div class="row">
                    <h1 class="text-center">Programas de <strong>Formación</strong></h1>
                    <div class="col-md-4">
                        <div class="card1">
                            <header>
                                <h4 class="text-center"><strong>Técnicos</strong></h4>
                            </header>
                            <ul>
                                <li>Seguridad ocupacional</li>
                                <li>Alistamiento y operación de maquinaria para la producción industrial</li>
                                <li>Procesos de manufactura</li>
                            </ul>                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card1">
                            <header>
                                <h4 class="text-center"><strong>Tecnólogos</strong></h4>
                            </header>
                            <ul>
                                <li>Gestión intefrada de la calidad, medio ambiente, seguridad y salud ocupacional</li>
                                <li>Gestión de la producción industrial</li>
                                <li>Gestión de recursos en plantas de producción</li>
                                <li>Salud ocupacional</li>
                            </ul>                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card1">
                            <header>
                                <h4 class="text-center"><strong>Especialización Tecnológica</strong></h4>
                            </header>
                            <ul>
                                <li>Gestión en laboratorios de ensayo y calibración - Norma ISO/IEC 17025</li>
                                <li>Supervisión de buenas prácticas de manufactura</li>
                            </ul>
                        </div>
                    </div>                  
                </div>
            </div> -->
        </section>
        <section class="noticias">
            <div>
                <div class="container">
                    <h1 class="text-center">Noticias <strong>SENA</strong></h1>
                    <h1 class="title-parallax">Noticias SENA</h1>
                    <i class="splitter-news"></i>
                    <i class="fa fa-newspaper-o"></i>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="news">
                                <img class="img1 img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/120150202082049.jpg">
                                <div class="inner-news">
                                    <h6>11/05/2017</h6>
                                    <p>Desde el #SENA apostamos a la competitividad de la economía, por eso realizamos taller con mesas productivas para revisar su alcance.</p>
                                </div>                              
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="news">
                                <img class="img1 img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/C_pbYxRXoAA5Jo2.jpg">
                                <div class="inner-news">
                                    <h6>12/05/2017</h6>
                                    <p>En el #SENA estamos conectados con las necesidades del sector empresarial en #SanAndrés y con la realidad de los ciudadanos: @MAndreaNieto.</p>
                                </div>                              
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="news">
                                <img class="img1 img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/as1.jpg">
                                <div class="inner-news">
                                    <h6>12/05/2017</h6>
                                    <p>#EstudiaEnElSENA porque además de formarte técnicamente nos interesamos por brindarte #Bienestar @SENAComunica @MAndreaNieto.</p>
                                </div>                              
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="news">
                                <img class="img1 img-new" src="<?= Yii::$app->request->baseUrl ?>/imgs/qw1.jpg">
                                <div class="inner-news">
                                    <h6>12/05/2017</h6>
                                    <p>Es importante que cuando los colombianos busquen en qué formarse, piensen en qué les gustaría trabajar: @MAndreaNieto #EstudiaEnElSENA.</p>
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
                    <i class="splitter-e"></i>
                    <i class="fa fa-file-text-o"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ex fugiat est laborum commodi blanditiis et officiis qui fuga error quis eaque sed, praesentium alias amet vel at dicta mollitia rem aliquam, voluptas necessitatibus, temporibus sit nihil vero. Alias, provident!</p>
                <nav class="row">
                    <a href="" class="btn btn-5 btn-5b icon-cart elink col-md-4"><span>Link Encuesta 1</span></a>
                    <a href="" class="btn btn-5 btn-5b icon-cart elink col-md-4"><span>Link Encuesta 2</span></a>
                    <a href="" class="btn btn-5 btn-5b icon-cart elink col-md-4"><span>Link Encuesta 3</span></a>

                </nav>
                
            </div>
        </section>
        <section class="galeria">
            <h1 class="text-center gtitle">Galería <strong>SENA</strong></h1>
            <i class="splitter-news"></i>

            <div class="container">

                <div class="wrapper">
                    <div class="col-md-10">
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
                    

                </div><!-- /wrapper -->
                <div class="col-md-4">
                    <button class="btn btng">Ambiente Confinado</button>
                    <button class="btn btng">Ambientes de Química</button>
                    <button class="btn btng">Gestión de la Producción</button>
                    <button class="btn btng">Gestión Integrada de la Calidad</button>
                    <button class="btn btng">Inventario de Salud Ocupacional</button>

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
                        <form action="" method="">
                            <div class="form-wrap">
                                <div class="login-inputs">
                                    <input type="email" placeholder="Correo Electrónico">
                                    <input type="password" placeholder="Contraseña">
                                </div>
                                <div class="2">
                                    <button type="submit">Iniciar Sesión</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>          
        </div>
    </div>
    <div class="cd-overlay-nav">
        <span></span>
    </div> <!-- cd-overlay-nav -->

    <div class="cd-overlay-content">
        <span></span>
    </div> <!-- cd-overlay-content -->
    <!-- EndLogin -->

    </div>
</div>
