<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contáctanos';
?>
<?php $this->beginBlock('block2'); ?>

<header>
    <section class="hero-table">
        <svg class="big-plus-a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508.45 577.58"><title>big-plus</title><text transform="translate(129.83 474.39) rotate(-19.33)" style="opacity:0.2;font-size:429.3069763183594px;fill:#fff;stroke:#fff;stroke-miterlimit:10;stroke-width:12px;font-family:ZurichBT-Roman, Zurich BT">+</text></svg>

        <div class="hero-content">
            <h1 class="hero-title-table animated fadeInUp delay text-center">Contáctanos <span></span></h1>
            <!-- <img class="" src="<?= Yii::$app->request->baseUrl ?>/imgs/asset-red-logo.svg" alt="" width="20%"> -->
        </div>
    </section>    
</header>


<?php $this->endBlock(); ?>
<div class="site-contact">            
    <div class="row contact-wrap">

        <div class="col-md-6 message-contact-section contact-section">
            <!-- <h1><?= Html::encode($this->title) ?></h1> -->
            <div>
                <h1 class="contact-title aniT delay">Mensaje</h1>
                <p>
                    Si tiene preguntas de negocios u otras preguntas, rellene el siguiente formulario para ponerse en contacto con nosotros.
                    Gracias.
                </p>

            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                <div class="alert alert-success">
                    Thank you for contacting us. We will respond to you as soon as possible.
                </div>

                <p>
                    Note that if you turn on the Yii debugger, you should be able
                    to view the mail message on the mail panel of the debugger.
                    <?php if (Yii::$app->mailer->useFileTransport): ?>
                        Because the application is in development mode, the email is not sent but saved as
                        a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                        Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                        application component to be false to enable email sending.
                    <?php endif; ?>
                </p>

            <?php else: ?>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name', ['template' => '{input}{beginLabel}Nombre{endLabel}<span class="focus-border"></span>'])->input('text', ['class' => 'form-control effect-16']) ?>

                    <?= $form->field($model, 'email', ['template' => '{input}{beginLabel}Correo Electrónico{endLabel}<span class="focus-border"></span>'])->input('email', ['class' => 'form-control effect-16']) ?>

                    <?= $form->field($model, 'subject', ['template' => '{beginLabel}Asunto{endLabel}{input}<span class="focus-border"></span>'])->dropDownList(['consulta' => 'Consulta', 'queja' => 'Queja', 'sugerencia' => 'Sugerencia'], ['prompt'=>'Seleccione una opción', 'class' => 'form-control effect-16'])->label('Asunto')  ?>
                        
                    <?= $form->field($model, 'body', ['template' => '{input}{beginLabel}Mensaje{endLabel}<span class="focus-border"></span>'])->textarea(['rows' => 3, 'class' => 'form-control effect-16'])  ?>

                    <!-- <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div>{image}</div><div>{input}</div>',
                    ]) ?> -->

                    <div class="form-group">
                        <?= Html::submitButton('Enviar', ['class' => 'contact-button', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            <?php endif; ?>
            </div>
            
        </div>
        <div class="col-md-6 text-center contact-section contact-phones-section">
            <div class="row margin-phones">

                <div class="col-md-6">
                    <h4 class="">Teléfonos Línea Ciudadano</h4>                        
                </div>
                <div class="col-md-6">
                    <p class="">Línea Gratuita Nacional <span>01 8000 910 270</span></p>
                    <p class="">Línea Bogotá, D.C. <span>(57 1) 592 55 55</span></p>                        
                </div>

            </div>
            <div class="row">

                <div class="col-md-6">
                    <h4 class="">Teléfonos Línea Empresarial</h4>                                               
                </div>
                <div class="col-md-6">
                    <p class="">Línea Gratuita Nacional <span>01 8000 910 682</span></p>
                    <p class="">Línea Bogotá, D.C. <a href="tel:">(57 1) 404 94  94</a></p>
                </div>
                <p>Días hábiles de lunes a viernes de 7:00 a.m. - 7:00 p.m. y sábados de 8:00 a.m. - 1:00 p.m. en jornada continua.</p>

            </div>

            <div class="row">
                <?= Html::img('@web/images/map.png', ['class' => '', 'width'=>'100%', 'alt' => 'Map']) ?>

            </div>
        </div>

    </div>
    <div>
<!--         <p>
            <a href="http://www.sena.edu.co" class="sena-link">www.<strong>sena</strong>.edu.co</a>
        </p> -->
        <nav class="contactenos-networks text-center">                        
            <a href=""><i class="fa fa-facebook fa-2x"></i></a>
            <a href=""><i class="fa fa-twitter fa-2x"></i></a>
            <a href=""><i class="fa fa-instagram fa-2x"></i></a>
            <a href=""><i class="fa fa-google-plus fa-2x"></i></a>
        </nav>                    
    </div>
</div> <!-- /site-contact -->
