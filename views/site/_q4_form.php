<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin(['options'=>['class'=>'form-inline']]); ?>
<?= $form->field($model, 'k')->textInput() ?>
<?= $form->field($model, 'b')->textInput() ?>
<?= $form->field($model, 'x1')->textInput() ?>
<?= $form->field($model, 'y1')->textInput() ?>
<?= $form->field($model, 'x2')->textInput() ?>
<?= $form->field($model, 'y2')->textInput() ?>
<div class="form-group clearfix">
    <?= Html::submitButton('Вычислить', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>