<?php
$this->breadcrumbs=array(
	'Maeest  Paises'=>array('index'),
	$model->pais_id,
);

$this->menu=array(
	array('label'=>'List maeest_Pais', 'url'=>array('index')),
	array('label'=>'Create maeest_Pais', 'url'=>array('create')),
	array('label'=>'Update maeest_Pais', 'url'=>array('update', 'id'=>$model->pais_id)),
	array('label'=>'Delete maeest_Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pais_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_Pais', 'url'=>array('admin')),
);
?>

<h1>View maeest_Pais #<?php echo $model->pais_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pais_id',
		'pais_idExterno',
		'descripcion',
		'pordefecto',
	),
)); ?>
