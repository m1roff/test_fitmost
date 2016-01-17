<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['site/1'])?>">Вопрос 1</a></p>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['site/2'])?>">Вопрос 2</a></p>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['site/3'])?>">Вопрос 3</a></p>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['site/4'])?>">Вопрос 4</a></p>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['site/5'])?>">Вопрос 5</a></p>

    </div>
</div>
