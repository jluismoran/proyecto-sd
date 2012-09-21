<?php
$this->breadcrumbs=array(
	'Maeest  Complemento Tipos'=>array('index'),
	$model->complementoTipo_id,
);

$this->menu=array(
	array('label'=>'List maeest_Complemento_tipo', 'url'=>array('index')),
	array('label'=>'Create maeest_Complemento_tipo', 'url'=>array('create')),
	array('label'=>'Update maeest_Complemento_tipo', 'url'=>array('update', 'id'=>$model->complementoTipo_id)),
	array('label'=>'Delete maeest_Complemento_tipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->complementoTipo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_Complemento_tipo', 'url'=>array('admin')),
);
?>

<h1>View maeest_Complemento_tipo #<?php echo $model->complementoTipo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'complementoTipo_id',
		'descripcion',
		'identificador',
		'podefecto',
	),
)); ?>
