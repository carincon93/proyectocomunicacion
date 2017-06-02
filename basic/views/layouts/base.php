<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
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

<div class="wrap-contact">
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
	<?php if (isset($this->blocks['block2'])): ?>
        <?= $this->blocks['block2'] ?>
    <?php endif; ?>
    <?php if (isset($this->blocks['block-contact'])): ?>
        <?= $this->blocks['block-contact'] ?>
    <?php endif; ?>
    <div class="container-fluid">
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
