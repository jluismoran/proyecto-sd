<?php
$this->breadcrumbs=array(
	'Maeest  Distritos'=>array('index'),
	$model->dst_id,
);

$this->menu=array(
	array('label'=>'List maeest_Distrito', 'url'=>array('index')),
	array('label'=>'Create maeest_Distrito', 'url'=>array('create')),
	array('label'=>'Update maeest_Distrito', 'url'=>array('update', 'id'=>$model->dst_id)),
	array('label'=>'Delete maeest_Distrito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dst_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_Distrito', 'url'=>array('admin')),
);
?>

<h1>View maeest_Distrito #<?php echo $model->dst_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dst_id',
		'prov_id',
		'dst_idExterno',
		'descripcion',
		'pordefecto',
		'cli_idejecutivo',
	),
)); ?>
