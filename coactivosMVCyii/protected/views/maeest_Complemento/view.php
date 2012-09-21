<?php
$this->breadcrumbs=array(
	'Maeest  Complementos'=>array('index'),
	$model->complemento_id,
);

$this->menu=array(
	array('label'=>'List maeest_Complemento', 'url'=>array('index')),
	array('label'=>'Create maeest_Complemento', 'url'=>array('create')),
	array('label'=>'Update maeest_Complemento', 'url'=>array('update', 'id'=>$model->complemento_id)),
	array('label'=>'Delete maeest_Complemento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->complemento_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_Complemento', 'url'=>array('admin')),
);
?>

<h1>View maeest_Complemento #<?php echo $model->complemento_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'complemento_id',
		array('name'=>'complementoTipo_id', 'value'=>CHtml::encode($model->complementosTipos->descripcion)),
		'descripcion',
		'pordefecto',
		array('name'=>'plantilla_id', 'value'=>CHtml::encode($model->plantilla->nombre)),
	),
)); ?>
