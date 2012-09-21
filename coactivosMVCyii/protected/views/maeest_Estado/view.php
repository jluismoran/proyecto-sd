<?php
$this->breadcrumbs=array(
	'Maeest  Estados'=>array('index'),
	$model->estado_id,
);

$this->menu=array(
	array('label'=>'List maeest_Estado', 'url'=>array('index')),
	array('label'=>'Create maeest_Estado', 'url'=>array('create')),
	array('label'=>'Update maeest_Estado', 'url'=>array('update', 'id'=>$model->estado_id)),
	array('label'=>'Delete maeest_Estado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->estado_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_Estado', 'url'=>array('admin')),
);
?>

<h1>View maeest_Estado #<?php echo $model->estado_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'estado_id',
		array('name'=>'estadoTipo_id', 'value'=>CHtml::encode($model->estadosTipos->descripcion)),
		'descripcion',
		'pordefecto',
	),
)); ?>
