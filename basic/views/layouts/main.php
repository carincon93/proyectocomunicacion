<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'Formación',  
            'url' => ['#'],
            'items' => [
                ['label' => 'Redes del Conocimiento', 'url' => '#'],
                ['label' => 'Evaluación y Certificación por Competencias Laborales', 'url' => '#'],
                ['label' => 'Técnico', 'url' => '#'],
                ['label' => 'Técnólogo', 'url' => '#'],
                ],
            ],
            ['label' => 'Instructores',  
            'url' => ['#'],
            'items' => [
                ['label' => 'Capacitación', 'url' => '#'],
                ['label' => '¿Quieres ser Instructor?', 'url' => '#'],
                ['label' => 'Formación y Convocatorias', 'url' => '#'],
                ],
            ],
            ['label' => 'Empresarios',  
            'url' => ['#'],
            'items' => [
                ['label' => 'Mesas Sectoriales', 'url' => '#'],
                ['label' => 'Normas de Competencias Laborales', 'url' => '#'],
                ['label' => 'Laboratorios para innovar', 'url' => '#'],
                ['label' => 'Solicitudes de Empresarios', 'url' => '#'],
                ['label' => 'Convocatorias Vigentes', 'url' => '#'],
                ],
            ],
            ['label' => 'Entidad',  
            'url' => ['#'],
            'items' => [
                ['label' => 'Misión y Visión', 'url' => '#', 'options' => ['id' => 'go-mision']],
                ['label' => 'Estructura Organizacional', 'url' => '#'],
                ['label' => 'Planeación Estratégica', 'url' => '#'],
                ],
            ],
            ['label' => 'Ambientes', 'options' => ['class' => 'dropdown', 'id' => 'go-galeria']],
            ['label' => 'Catálogo Información',  'options' => ['class' => 'dropdown', 'id' => 'go-formacion']],
            ['label' => 'Plan Estratégico',  
            'url' => ['#'],
            'items' => [
                ['label' => 'Plan de Acción', 'url' => ['/site/table']],
                ['label' => 'Plan de Modernizacion Tecnologica', 'url' => '#'],
                ],
            ],
            ['label' => 'Contáctanos',  
            'url' => ['#'],
            'items' => [
                ['label' => 'Contáctenos', 'url' => '#', 'options' => ['class' => 'contactanos-link']],
                ['label' => 'PQRS', 'url' => '#', 'options' => ['class' => 'pqrs-link']],
                ],
            ],

        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            // ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar Sesión', 'options' => ['class' => 'dropdown cd-nav-trigger']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
            
    <div class="content">
        <?= $content ?>        
    </div>
    
</div>
<footer>
    <figure class="plus-a plus" style="">+</figure>
    <figure class="plus-b plus" style="font-size: 8rem;">+</figure>
    <figure class="plus-c plus" style="font-size: 2rem;">+</figure>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <nav class="footer-info">
                    
                    <ul class="informacion"> 
                        <h4 > INFORMACIÓN </h4>
                        <ul class="footer-social-networks">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <li>Servicio Nacional de Aprendizaje SENA</li>
                        <li>Regional Distrito Capital</li>
                        <li>
                            <span>Centro de Gestión Industrial</span>
                        </li>
                        <li>
                            <span>Dirección: </span> Calle 15 No 31 - 42 
                        </li>
                        <li>
                            <span>Ciudad: </span> Bogotá – Colombia
                        </li>
                        <li>
                            <span>Correo Electrónico: </span>redproduccionsena@gmail.com
                        </li>
                        <li>
                            <span>Líneas Gratuitas Atención al Ciudadano: </span> Bogotá (57 1) 5925555
                        </li>
                        <li>
                            <span>Resto del país: </span> 018000 910270
                        </li>
                        <li>
                            <span>Líneas Gratuitas Atención al Empresario: </span>Bogotá (57 1) 4049494 
                        </li>
                        <li>
                            <span>Resto del país:</span>  018000 910682
                        </li>
                    </ul>
                </nav>                  
            </div>
            <div class="col-md-5">
                <nav class="icontec">
                    <ul>
                        <li>
                            <img src="imgs/icontecA.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/icontecB.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/icontecC.png" alt="">
                        </li>
                        <li>
                            <img src="imgs/icontecD.png" alt="">
                        </li>
                    </ul>

                </nav>
            </div>
        </div>          
    </div> <!-- cerro div container -->
    <p class="text-center">&copy; Todos los derechos reservados <?= date('Y') ?></p>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
