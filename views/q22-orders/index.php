<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\S22OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'S22 Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="s22-orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create S22 Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'age',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
