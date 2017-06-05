<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    
    <div class="login cd-primary-nav">
        <i class="cd-nav-trigger fa fa-times trigger-times"></i>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 form-wrap">
                    <div class="form">
                        <!-- <p>Please fill out the following fields to login:</p> -->
                        <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'fieldConfig' => [
                                'template' => "{label}\n<div class=\"\">{input}</div>\n<div class=\"\">{error}</div>",
                                'labelOptions' => ['class' => 'col-lg-1 control-label'],
                            ],
                        ]); ?>
                        <h3 class="login-title">Iniciar Sesión</h3>
            
                        <?= $form->field($model, 'email', ['template' => '{input}{beginLabel}Correo Electrónico{endLabel}<span class="focus-border"></span>'])->input('email', ['class' => 'form-control effect-16']) ?>
                        <?= $form->field($model, 'password', ['template' => '{input}{beginLabel}Contraseña{endLabel}<span class="focus-border"></span>'])->input('password', ['class' => 'form-control effect-16']) ?>
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"\">{input} {label}</div>\n<div class=\"\">{error}</div>",
                        ])->label('Recuérdame') ?>
                        
                        <?= Html::submitButton('Iniciar Sesión', ['class' => 'login-button', 'name' => 'login-button']) ?>
                     
                        <?php ActiveForm::end(); ?>
                        <div class="" style="color:#999;">
                            You may login with <strong>admin@yii.com/admin</strong> or <strong>demo@yii.com/demo</strong>.<br>
                            To modify the username/password, please check out the code <code>app\models\User::$users</code>.
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </div><!-- /login -->
    <!-- Overlay -->
    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <div class="cd-overlay-content">
        <span></span>
    </div>
</div>
