<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Departamentos;
use yii\web\View;


/* @var $this yii\web\View */
/* @var $model app\models\PqrsForm */
/* @var $form ActiveForm */
?>
<?php $this->beginBlock('jumbotron-pages'); ?>
<header class="jumbotron contact">
    <div class="container">

        <h2 class="text-center">Petición, Queja, Reclamo, Solicitud</h2>

    </div>
</header>
<?php $this->endBlock(); ?>
<section class="site-pqrs">


    <div class="container">
        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'nombre') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'tipoDocumento') ?>
            <?= $form->field($model, 'numeroDocumento') ?>
            <?= $form->field($model, 'teleNumero') ?>
            <?= $form->field($model, 'celNumero') ?>
            <?= $form->field($model, 'id_departamento')->dropDownList(['text' => 'Please select', ArrayHelper::map(Departamentos::find()->all(),'id_departamento','nombre')], ['id' => 'a12']); ?>

            <?= $form->field($model, 'id_municipio')->dropDownList([''],['id' => 'a13']) ?>
            <?= $form->field($model, 'direccion') ?>
            <?= $form->field($model, 'tipoPeticion') ?>
            <?= $form->field($model, 'autorizacion') ?>
            <?= $form->field($model, 'mensaje') ?>
        
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>
        
    </div>




</section><!-- site-pqrs -->