<?php
$this->breadcrumbs=array(
	'Doc. Coactivos',
);

$this->menu=array(
	array('label'=>'Crear documento', 'url'=>array('create')),
	array('label'=>'Gestionar documentos', 'url'=>array('admin')),
);
?>

<h1>Documentos Coactivos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
