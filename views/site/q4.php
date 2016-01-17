<?php
$this->title = 'Ответ на вопрос 4';
$this->params['breadcrumbs'][] = $this->title;
?>

<p><i>пришлось погуглить :-)</i></p>

<div class="bg-success"><?=$model->result?></div>

<?=$this->render('_q4_form', ['model'=>$model])?>