<?php
use app\models\Q6News;
$this->title = 'Ответ на вопрос 6';
$this->params['breadcrumbs'][] = $this->title;


?>

<ul>
    <li><a href="#1">Способ из примера</a></li>
    <li><a href="#2">Инъекция</a></li>
    <li><a href="#3">Простой способ защиты</a></li>
    <li><a href="#4">Хороший способ защиты</a></li>
</ul>

<h1 id="1">Способ из примера</h1>
Передаваемое значение:
<?
$k = 1;
$sql = "SELECT id, anons,text FROM ".Q6News::tableName()." WHERE id='".$k."'";
?>
<pre><?=htmlspecialchars($k)?></pre>
Запрос:
<pre><?=$sql?></pre>
Результат:
<pre><?print_r( Yii::$app->db->createCommand($sql)->queryAll() )?></pre>
<hr>

<h1 id="2">Инъекция</h1>
Передаваемое значение:
<?
$k = '1\' or 1=1; --';
$sql = "SELECT id, anons,text FROM ".Q6News::tableName()." WHERE id='".$k."'";
?>
<pre><?=htmlspecialchars($k)?></pre>
Запрос:
<pre><?=$sql?></pre>
Результат:
<pre><?print_r( Yii::$app->db->createCommand($sql)->queryAll() )?></pre>
<hr>



<h1 id="3">Простой способ защиты</h1>
Передаваемое значение:
<?
$k = '1\' or 1=1; --';
$sql = "SELECT id, anons,text FROM ".Q6News::tableName()." WHERE id='".mysql_real_escape_string($k)."'";
?>
<pre><?=htmlspecialchars($k)?></pre>
Запрос:
<pre><?=$sql?></pre>
Результат:
<pre><?print_r( Yii::$app->db->createCommand($sql)->queryAll() )?></pre>
<hr>



<h1 id="4">Хороший способ защиты</h1>
Передаваемое значение:
<?
$k = '1\' or 1=1; --';
$sql = "SELECT id, anons,text FROM ".Q6News::tableName()." WHERE id=:id";
?>
<pre><?=htmlspecialchars($k)?></pre>
Запрос:
<pre><?=$sql?></pre>
Результат:
<pre><?print_r( Yii::$app->db->createCommand($sql)->bindValue(':id', $k)->queryALl() )?></pre>
<hr>

