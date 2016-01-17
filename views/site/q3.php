<?php
$this->title = 'Ответ на вопрос 3';
$this->params['breadcrumbs'][] = $this->title;
?>
Текст:
<pre>
    <?=$model->text?>
</pre>

Обработанный (просмотр)
<pre>
    <?=htmlspecialchars($model->rightText)?>
</pre>

Обработанный
<p><?=$model->rightText?></p>