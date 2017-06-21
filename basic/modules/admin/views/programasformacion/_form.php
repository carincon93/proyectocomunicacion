<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramasFormacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programas-formacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombrePrograma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_programaFormacion')->textInput() ?>

    <?= $form->field($model, 'tipoFormacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
