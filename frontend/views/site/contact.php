<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <table>
        <thead>BIURO OBSŁUGI KLIENTA</thead>
            <tbody>
                <tr><td>Telefon: +48 666 555 444</td></tr>
                <tr><td>email: candyshop@candy.com</td></tr>
                <tr><td>Godziny pracy:</td></tr>
                <tr><td>Poniedziałek - Piątek: 10:00 - 19:00</td></tr>
                <tr><td>Sobota: 10:00 - 16:00</td></tr>
                <tr><td>W TYM MIEJSCU POWINIEN BYĆ FORMULARZ KONTAKTOWY DO NAS</td></tr>
            </tbody>
    </table>
        

    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
