<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;

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
        // 'brandLabel' => Html::img('/imgs/asset-logos-svg.svg'),
        'brandUrl' => Yii::$app->homeUrl,
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
                ['label' => 'Misión y Visión', 'url' => 'javascript:void(0)', 'options' => ['id' => 'go-mision']],
                ['label' => 'Estructura Organizacional', 'url' => '#'],
                ['label' => 'Planeación Estratégica', 'url' => '#'],
                ],
            ],
            ['label' => 'Ambientes', 'url' => 'javascript:void(0)','options' => ['class' => 'dropdown-toggle', 'id' => 'go-galeria']],
            ['label' => 'Catálogo Información',  'url' => 'javascript:void(0)', 'options' => ['class' => 'dropdown', 'id' => 'go-formacion']],
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
                ['label' => 'Contáctenos', 'url' => ['/site/contact'], 'options' => ['class' => 'contactenos-link']],
                ['label' => 'PQRS', 'url' => '#', 'options' => ['class' => 'pqrs-link']],
                ],
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar Sesión', 'url' => 'javascript:void(0)', 'options' => ['class' => 'login-navbar cd-nav-trigger'],]
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
    <?php if (isset($this->blocks['block1'])): ?>
        <?= $this->blocks['block1'] ?>
    <?php endif; ?>

    <!-- <div class="container-fluid"> -->
        <?= $content ?>
    <!-- </div> -->
</div>

<footer class="footer">
    <div class="container">

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
                        <span>Líneas Gratuitas Atención al Ciudadano: </span> Bogotá (57 1) 592 55 55
                    </li>
                    <li>
                        <span>Resto del país: </span> 018000 910270
                    </li>
                    <li>
                        <span>Líneas Gratuitas Atención al Empresario: </span>Bogotá (57 1) 404 94 94 
                    </li>
                    <li>
                        <span>Resto del país:</span>  018000 910682
                    </li>
                </ul>
            </nav>                  
        </div>
        <div class="col-md-5">
            <nav class="certificados">
                <ul>
                    <li>
                        <img src="<?= Yii::$app->request->baseUrl ?>/imgs/icontecA.png" alt="">
                    </li>
                    <li>
                        <img src="<?= Yii::$app->request->baseUrl ?>/imgs/icontecB.png" alt="">
                    </li>
                    <li>
                        <img src="<?= Yii::$app->request->baseUrl ?>/imgs/icontecC.png" alt="">
                    </li>
                    <li>
                        <img src="<?= Yii::$app->request->baseUrl ?>/imgs/icontecD.png" alt="">
                    </li>
                </ul>

            </nav>
        </div>    
        <p class="text-center">&copy; Todos los derechos reservados <?= date('Y') ?></p>

        <!-- <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p> -->

    </div>
</footer>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
