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

    <!-- <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
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
    ?> -->

    <div class="">
<!--         <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?> -->
        <?= $content ?>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <nav class="footer-info">
                    
                    <ul class="informacion"> 
                        <h4 > INFORMACION </h4><br>
                        <li>Servicio Nacional de Aprendizaje SENA <br> Regional Distrito Capital</li>
                        <li>
                            <span>Centro De Gestión IndustrialL</span>
                        </li>
                        <li>
                            <span>Direccion: </span> Calle 15 No 31 - 42 
                        </li>
                        <li>
                            <span>Ciudad: </span> Bogotá – Colombia
                        </li>
                        <li>
                            <span>Correo Electronico: </span>redproduccionsena@gmail.com
                        </li>
                        <li>
                            <span>Líneas Gratuitas Atencio Al Ciudadano: </span> Bogotá (57 1) 5925555
                        </li>
                        <li>
                            <span>Resto del pais: </span> 018000 910270
                        </li>
                        <li>
                            <span>Líneas gratuitas atención al empresario: </span>Bogotá (57 1) 4049494 
                        </li>
                        <li>
                            <span>Resto del pais:</span>  018000 910682
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
