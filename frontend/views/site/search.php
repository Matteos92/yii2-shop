<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
?>

<?php /** @var $model \common\models\Product */?>

<div class="product-search">
        <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        ]); 
        ?>
    
    

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>
</div>
