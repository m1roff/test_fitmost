<?php
/* @var $this yii\web\View */
?>
<h1>Решение 2.1</h1>

<div class="site-index">

    <div class="body-content">
        <p>Мне кажется условия задачи не совсем корректны!</p>
        <p>1) Просто создал методы action у текущего контроллера (ниже кнопочки)</p>
        <p>2) Создал правило в контроллере, которые запрещает доступ</p>
        <p>3) Если авторизоваться в приложении, то кнопочки заработают (admin:admin или demo:demo)</p>

        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['get-user-name'])?>">actionGetUserName</a></p>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['get-user-role'])?>">actionGetUserRole</a></p>
        <p><a class="btn btn-default" href="<?=\yii\helpers\Url::to(['get-user-payments'])?>">actionGetUserPayments</a></p>
    </div>
</div>
