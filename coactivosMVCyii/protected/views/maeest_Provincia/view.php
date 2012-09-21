<?php
$this->breadcrumbs=array(
	'Maeest  Provincias'=>array('index'),
	$model->prov_id,
);

$this->menu=array(
	array('label'=>'List maeest_Provincia', 'url'=>array('index')),
	array('label'=>'Create maeest_Provincia', 'url'=>array('create')),
	array('label'=>'Update maeest_Provincia', 'url'=>array('update', 'id'=>$model->prov_id)),
	array('label'=>'Delete maeest_Provincia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->prov_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_Provincia', 'url'=>array('admin')),
);
?>

<h1>View maeest_Provincia #<?php echo $model->prov_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'prov_id',
		'dep_id',
		'prov_idExterno',
		'descripcion',
		'pordefecto',
	),
)); ?>
