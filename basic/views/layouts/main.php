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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<?php
NavBar::begin([
    'brandLabel' => Html::img('@web/images/logoProyecto.svg', ['class' => 'redConocimientoLogo', 'alt' => 'Logo Red Conocimiento']),
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        // ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Plan de Acción', 'url' => ['/site/about']],
        ['label' => 'Contáctenos', 'url' => ['/site/contact']],
        ['label' => 'PQRS', 'url' => ['/site/pqrs']],
        Yii::$app->user->isGuest ? (
            ['label' => 'Iniciar Sesión', 'url' => ['/site/login']]
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
<?php if (isset($this->blocks['jumbotron-contact'])): ?>
    <?= $this->blocks['jumbotron-contact'] ?>
<?php endif; ?>

<?= $content ?>

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

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
