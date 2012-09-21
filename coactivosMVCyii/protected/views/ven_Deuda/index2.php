<?php
$this->breadcrumbs=array(
	'Doc. Coactivos',
);


?>

<h1>Documentos Coactivos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
