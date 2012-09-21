<?php
$this->breadcrumbs=array(
	'Maeest  Estado Tipos'=>array('index'),
	$model->estadoTipo_id,
);

$this->menu=array(
	array('label'=>'List maeest_EstadoTipo', 'url'=>array('index')),
	array('label'=>'Create maeest_EstadoTipo', 'url'=>array('create')),
	array('label'=>'Update maeest_EstadoTipo', 'url'=>array('update', 'id'=>$model->estadoTipo_id)),
	array('label'=>'Delete maeest_EstadoTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->estadoTipo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_EstadoTipo', 'url'=>array('admin')),
);
?>

<h1>View maeest_EstadoTipo #<?php echo $model->estadoTipo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'estadoTipo_id',
		'descripcion',
		'pordefecto',
	),
)); ?>
