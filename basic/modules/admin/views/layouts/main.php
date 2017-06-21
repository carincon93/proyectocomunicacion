<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

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


<aside class="dashboard-menu">
    <header></header>
    <nav>
        <ul class="list-unstyled">
            <li>
                <?= Html::a('Programas de formación', Url::to(['programasformacion/index'])) ?>
            </li>
        </ul>
    </nav>
</aside>
<div class="programas-formacion-index">
	<?= $content ?>	
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>