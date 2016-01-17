<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\S22Orders */

$this->title = 'Create S22 Orders';
$this->params['breadcrumbs'][] = ['label' => 'S22 Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="s22-orders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
