<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\S22Users */

$this->title = 'Update S22 Users: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'S22 Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="s22-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
