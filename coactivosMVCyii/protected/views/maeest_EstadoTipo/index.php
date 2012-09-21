<?php
$this->breadcrumbs=array(
	'Maeest  Estado Tipos',
);

$this->menu=array(
	array('label'=>'Create maeest_EstadoTipo', 'url'=>array('create')),
	array('label'=>'Manage maeest_EstadoTipo', 'url'=>array('admin')),
);
?>

<h1>Maeest  Estado Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
