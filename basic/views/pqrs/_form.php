<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PqrsForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pqrs-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipoDocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numeroDocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teleNumero')->textInput() ?>

    <?= $form->field($model, 'celNumero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_departamento')->textInput() ?>

    <?= $form->field($model, 'id_municipio')->textInput() ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipoPeticion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autorizacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mensaje')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
