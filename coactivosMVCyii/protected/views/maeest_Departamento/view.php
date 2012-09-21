<?php
$this->breadcrumbs=array(
	'Maeest  Departamentos'=>array('index'),
	$model->dep_id,
);

$this->menu=array(
	array('label'=>'List maeest_Departamento', 'url'=>array('index')),
	array('label'=>'Create maeest_Departamento', 'url'=>array('create')),
	array('label'=>'Update maeest_Departamento', 'url'=>array('update', 'id'=>$model->dep_id)),
	array('label'=>'Delete maeest_Departamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dep_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_Departamento', 'url'=>array('admin')),
);
?>

<h1>View maeest_Departamento #<?php echo $model->dep_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dep_id',
		'pais_id',
		'dep_idExterno',
		'descripcion',
		'pordefecto',
	),
)); ?>
