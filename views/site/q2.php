<?php
$this->title = 'Ответ на вопрос 2';
$this->params['breadcrumbs'][] = $this->title;
?>
Массив:
<pre>
    <?print_r($model->intArray)?>
</pre>

Не повторяющиеся элементы
<pre>
    <?=$model->notRepeated?>
</pre>