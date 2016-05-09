<?php
use yii\helpers\Html;
use yii\helpers\Markdown;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
?>

<?php /** @var $model \common\models\Product */ ?>

<div class="col-xs-12 well"> 
    <div class="col-xs-2">
        <?php
        $images = $model->images;
        if (isset($images[0])) 
        {
            echo Html::img($images[0]->getUrl(), ['width' => '100%']);
        }
        ?>
    </div>
    <div class="col-xs-6">
        <h2><?= Html::encode($model->title) ?></h2>
        <?= Markdown::process($model->description) ?>
    </div>
    <div class="col-xs-4 price">
        <div class="row">
            <div class="col-xs-12">$<?= number_format($model->price,2,'.'," ") ?></div>
            <div class="col-xs-12"><?= Html::a('Add to Cart', ['cart/add', 
                'id' => $model->id], ['class' => 'btn btn-success'])?></div>
        </div>
        <input id="input-21d" value="1" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" data-rtl="true"/>
    </div>
</div>