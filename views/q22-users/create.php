<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\S22Users */

$this->title = 'Create S22 Users';
$this->params['breadcrumbs'][] = ['label' => 'S22 Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="s22-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
