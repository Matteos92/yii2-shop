<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Search';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php /** @var $model \common\models\Product */?>
<h1><?= Html::encode($this->title) ?></h1>
<br/>
<div class="product-search">
        <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        ]); 
        ?>
    
    <input type="search" onclick=""/>
    <input type="search" onclick=""/>

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>
</div>
