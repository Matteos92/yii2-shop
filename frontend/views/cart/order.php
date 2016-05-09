<?php
use \yii\helpers\Html;
use \yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $products common\models\Product[] */
?>
<h1>Your order</h1>

<div class="container-fluid">
    
    <table>
        <thead>Każdą przesyłkę staramy się przywieźć w jak najkrótszym terminie (jest ona zależna od ilości oraz wyboru dostawcy).</thead>
            <tbody>
                <tr><td>Zamówienie złożone do godziny 12 jest wysyłane tego samego dnia.</td></tr>
                <tr><td>Jeśli zamówienie zostało zrobione w piątek po 12, paczka zostanie wysłana dopiero w poniedziałek.</td></tr>
                <tr><td>W momencie wysłania paczki automatycznie otrzymujesz wiadomość potwierdzającą.</td></tr>
                <tr><td>Przy składaniu zamówienia masz do wyboru dwie formy płatności:
                        <ol>
                            <li>Przelew bankowy</li>
                            <li>Płatność przy odbiorze</li>
                        </ol>
                    </td>
                </tr>
                <tr><td>Oferujemy wysyłki poprzez trzech dostawców:
                        <ol>
                            <li>Paczkomaty InPost
                                <ul>
                                    <li>
                                        przedpłata na konto: 10,00zł
                                    </li>
                                </ul>
                            </li>
                            <li>Poczta Polska
                                <ul>
                                    <li>
                                        przedpłata na konto: 9,00zł
                                    </li>
                                    <li>
                                        z płatnością przy odbiorze: 13,00zł
                                    </li>
                                </ul>
                            </li>
                            <li>Kurier DHL
                                <ul>
                                    <li>
                                        przedpłata na konto: 13,00zł
                                    </li>
                                    <li>
                                        płatność przy odbiorze: 18,00zł
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </td>
                </tr>
            </tbody>
    </table>
    Warto pamiętać, aby w bardzo upalne dni nie zamawiać czekoladowych produktów ze względu na ich roztopienie się w większej temperaturze. 
    <br/>
    Wszelkie paczki zabezpieczamy starannie, korzystając z wypełniaczy i folii bąbelkowej. 
    <br/><br/>
    <div class="row">
        <div class="col-xs-4">

        </div>
        <div class="col-xs-2">
            Price
        </div>
        <div class="col-xs-2">
            Quantity
        </div>
        <div class="col-xs-2">
            Cost
        </div>
    </div>
    <?php foreach ($products as $product):?>
    <div class="row">
        <div class="col-xs-4">
            <?= Html::encode($product->title) ?>
        </div>
        <div class="col-xs-2">
            $<?= $product->price ?>
        </div>
        <div class="col-xs-2">
            <?= $quantity = $product->getQuantity()?>
        </div>
        <div class="col-xs-2">
            $<?= $product->getCost() ?>
        </div>
    </div>
    <?php endforeach ?>
    <div class="row">
        <div class="col-xs-8">

        </div>
        <div class="col-xs-2">
            Total: $<?= $total ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <?php
            /* @var $form ActiveForm */
            $form = ActiveForm::begin([
                'id' => 'order-form',
            ]) ?>

            <?= $form->field($order, 'phone') ?>
            <?= $form->field($order, 'email') ?>
            <?= $form->field($order, 'notes')->textarea() ?>

            <div class="form-group row">
                <div class="col-xs-12">
                    <?= Html::submitButton('Order', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>

            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>