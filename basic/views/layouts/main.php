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
            'class' => 'navbar-inverse',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'Inicio', 'url' => '/',
            ],
            ['label' => 'Misión y Visión', 'url' => 'javascript:void(0)', 'options' => ['id' => 'go-mision'],
            ],
            ['label' => 'Ambientes', 'url' => 'javascript:void(0)','options' => ['class' => 'dropdown-toggle', 'id' => 'go-galeria']],
            ['label' => 'Catálogo Información',  'url' => 'javascript:void(0)', 'options' => ['class' => 'dropdown', 'id' => 'go-formacion']],
            ['label' => 'Plan de Acción', 'url' => ['/site/table'],
            ],
            ['label' => 'Contáctanos',  
            'url' => ['#'],
            'items' => [
                ['label' => 'Contáctenos', 'url' => ['/site/contact'], 'options' => ['class' => 'contactenos-link']],
                ['label' => 'PQRS', 'url' => ['/site/pqrs'], 'options' => ['class' => 'pqrs-link']],
                ],
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Iniciar Sesión', 'url' => '/site/login', 'options' => ['class' => 'login-navbar'],]
            ) : (
                '<li class="login-navbar">'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'logout-link']
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
        <div class="row">
            
            <div class="col-md-7">
                <div class="footer-info">
                    
                    <ul class="informacion"> 
                        <h4 > INFORMACIÓN </h4>
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
                            <span>Resto del país: </span> 01 8000 910270
                        </li>
                        <li>
                            <span>Líneas Gratuitas Atención al Empresario: </span>Bogotá (57 1) 404 94 94 
                        </li>
                        <li>
                            <span>Resto del país:</span>  01 8000 910682
                        </li>
                    </ul>
                </div>
                <nav class="footer-social-networks">
                    <a href="" data-toggle="tooltip" title="Facebook" class="facebook-link"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="" data-toggle="tooltip" title="Twitter" class="twitter-link"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="" data-toggle="tooltip" title="Instagram" class="instagram-link"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="" data-toggle="tooltip" title="Google +" class="google-plus-link"><i class="fa fa-google-plus fa-2x"></i></a>
                </nav>                  
            </div>
            <div class="col-md-5">
                <nav class="certificados">
                    <ul>
                        <li>
                            <?= Html::img('@web/images/icontecA.png', ['alt' => 'img-footer']) ?>
                        </li>
                        <li>
                            <?= Html::img('@web/images/icontecB.png', ['alt' => 'img-footer']) ?>
                        </li>
                        <li>
                            <?= Html::img('@web/images/icontecC.png', ['alt' => 'img-footer']) ?>
                        </li>
                        <li>
                            <?= Html::img('@web/images/icontecD.png', ['alt' => 'img-footer']) ?>
                        </li>
                    </ul>

                </nav>
            </div>    

        </div>
        <hr>
        <p class="">&copy; Todos los derechos reservados <?= date('Y') ?></p>
        <!-- <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p> -->
    </div>
</footer>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
