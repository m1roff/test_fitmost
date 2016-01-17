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
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['site/6'])?>">Вопрос 6</a></p>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['site/7'])?>">Вопрос 7</a></p>
        <h3>Решения задач</h3>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['/q21'])?>">Решение 2.1</a></p>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['/q22-users'])?>">Решение 2.2</a></p>

    </div>
</div>
