<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\S22UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'S22 Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="s22-users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create S22 Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'age',
            [
                'format' => 'html',
                'header' => 'Есть заявка',
                'value' => function($data)
                {
                    return $data->ordersCount > 0 ? 'Да' : 'Нет' ;
                }
            ],
            [
                'format' => 'html',
                'header' => '>5',
                'value' => function($data)
                {
                    return $data->ordersCount > 5 ? 'Да' : 'Нет' ;
                }
            ],
            [
                'format' => 'html',
                'header' => 'Сегодня',
                'value' => function($data)
                {
                    return $data->ordersTodayCount > 0 ? 'Да' : 'Нет' ;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
