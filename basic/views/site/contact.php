<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
?>

<div class="site-contact">    
        <i class="trigger-menu fa fa-bars aniT delay"></i>
        <div class="overlay-background"></div>
        <div class="overlay-contact">
            <a href="javascript:void(0)">
                <i class="fa fa-times trigger-times"></i>
            </a>
            <nav class="main-menu">
                <ul>
                    <li class="ani0 delay"><?= Html::a('Inicio', ['/'], ['class'=>'']) ?></li>
                    <li class="ani1 delay">Formación
                        <ul>
                            <li><?= Html::a('Redes del Conocimiento', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Evaluación y Certificación por Competencias Laborales', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Técnico', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Técnólogo', ['/'], ['class'=>'']) ?></li>
                        </ul>
                    </li>
                    <li class="ani2 delay">Instructores
                        <ul>
                            <li><?= Html::a('Capacitación', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('¿Quieres ser Instructor?', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Formación y Convocatorias', ['/'], ['class'=>'']) ?></li>
                        </ul>
                    </li>
                    <li class="ani3 delay">Empresarios
                        <ul>
                            <li><?= Html::a('Mesas Sectoriales', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Normas de Competencias Laborales', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Laboratorios para innovar', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Solicitudes de Empresarios', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Convocatorias Vigentes', ['/'], ['class'=>'']) ?></li>
                        </ul>
                    </li>
                    <li class="ani5 delay">Entidad
                        <ul>
                            <li><?= Html::a('Misión y Visión', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Estructura Organizacional', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Planeación Estratégica', ['/'], ['class'=>'']) ?></li>
                        </ul>
                    </li>
                    <li class="ani6 delay">Plan Estratégico
                        <ul>
                            <li><?= Html::a('Plan de Acción', ['/'], ['class'=>'']) ?></li>
                            <li><?= Html::a('Plan de Modernizacion Tecnologica', ['/'], ['class'=>'']) ?></li>
                        </ul>
                    </li>
                    <li class="ani7 delay"><?= Html::a('Contáctanos', ['/'], ['class'=>'']) ?></li>
                    <li class="ani8 delay"><?= Html::a('PQRS', ['/'], ['class'=>'']) ?></li>                   

                </ul>
            </nav>   
        </div>
        <div class="row contact-wrap">
            <div class="col-md-6 message-contact-section contact-section">
                <!-- <h1><?= Html::encode($this->title) ?></h1> -->
                <div>
                    <h1 class="contact-title aniT delay">Mensaje</h1>
                    <p>
                        If you have business inquiries or other questions, please fill out the following form to contact us.
                        Thank you.
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

                        <?= $form->field($model, 'name', ['template' => '{beginLabel}Nombre{endLabel}{input}<span class="focus-border"></span>'])->input('text', ['class' => 'form-control effect-1']) ?>

                        <?= $form->field($model, 'email', ['template' => '{beginLabel}Correo Electrónico{endLabel}{input}<span class="focus-border"></span>'])->input('email', ['class' => 'form-control effect-1']) ?>

                        <?= $form->field($model, 'subject', ['template' => '{beginLabel}Asunto{endLabel}{input}<span class="focus-border"></span>'])->dropDownList(['consulta' => 'Consulta', 'queja' => 'Queja', 'sugerencia' => 'Sugerencia'], ['prompt'=>'Seleccione una opción', 'class' => 'form-control effect-1'])->label('Asunto')  ?>

                        <?= $form->field($model, 'body', ['template' => '{beginLabel}Mensaje{endLabel}{input}<span class="focus-border"></span>'])->textarea(['rows' => 6, 'class' => 'form-control effect-1'])  ?>

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
            <div class="col-md-2 contact-section">
                col-2

            </div>
            <div class="col-md-4 text-center contact-section contact-phones-section">
                <div>
                    <h4 class="">Teléfonos Línea Ciudadano</h4>
                    <p class="">Línea Gratuita Nacional <span>01 8000 910 270</span></p>
                    <p class="">Línea Bogotá, D.C. <span>(57 1) 592 55 55</span></p>                        
                </div>
                <div>
                    <h4 class="">Teléfonos Línea Empresarial</h4>
                    <p class="">Línea Gratuita Nacional <span>01 8000 910 682</span></p>
                    <p class="">Línea Bogotá, D.C. <span>(57 1) 404 94  94</span></p>                        
                </div>
                <p>Días hábiles de lunes a viernes de 7:00 a.m. - 7:00 p.m. y sábados de 8:00 a.m. - 1:00 p.m. en jornada continua.</p>
                <div>
                    <p>
                        <a href="http://www.sena.edu.co" class="sena-link">www.<strong>sena</strong>.edu.co</a>
                    </p>
                    <nav class="contactenos-networks">                        
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                    </nav>                    
                </div>
            </div>
        </div>


</div> <!-- /site-contact -->
