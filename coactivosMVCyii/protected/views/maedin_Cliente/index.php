<?php
$this->breadcrumbs=array(
	'Ejecutados',
);

$this->menu=array(
	array('label'=>'Crear Ejecutado', 'url'=>array('create')),
	array('label'=>'Gestionar Ejecutado', 'url'=>array('admin')),
);
?>

<h1>Ejecutados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
