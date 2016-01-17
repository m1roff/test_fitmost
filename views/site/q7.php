<?php
use app\models\Q6News;
$this->title = 'Ответ на вопрос 7';
$this->params['breadcrumbs'][] = $this->title;

?>

<p>Структура предложена в миграции "m160117_180420_q7"</p>


<?

$sql = 'SELECT books.name FROM fitmost.q7_books AS books
INNER JOIN q7_cross_books_2_authors AS cr ON (cr.id_books = books.id)
GROUP BY books.name
HAVING count(*)=3;';
?>

Запрос:
<pre><?=$sql?></pre>

Результат:
<pre><?print_r(Yii::$app->db->createCommand($sql)->queryAll())?></pre>