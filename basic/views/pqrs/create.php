<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PqrsForm */

$this->title = 'Create Pqrs Form';
$this->params['breadcrumbs'][] = ['label' => 'Pqrs Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pqrs-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
