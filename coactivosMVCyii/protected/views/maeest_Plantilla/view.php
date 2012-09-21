<?php
$this->breadcrumbs=array(
	'Maeest  Plantillas'=>array('index'),
	$model->plantilla_id,
);

$this->menu=array(
	array('label'=>'List maeest_Plantilla', 'url'=>array('index')),
	array('label'=>'Create maeest_Plantilla', 'url'=>array('create')),
	array('label'=>'Update maeest_Plantilla', 'url'=>array('update', 'id'=>$model->plantilla_id)),
	array('label'=>'Delete maeest_Plantilla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->plantilla_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maeest_Plantilla', 'url'=>array('admin')),
);
?>

<h1>View maeest_Plantilla #<?php echo $model->plantilla_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'plantilla_id',
		'nombre',
		'descripcion',
		'campo0',
		'campo1',
		'campo2',
		'campo3',
		'campo4',
		'campo5',
		'campo6',
		'campo7',
		'campo8',
		'campo9',
		'campo10',
		'campo11',
		'campo12',
		'campo13',
		'campo14',
		'campo15',
		'campo16',
		'campo17',
		'campo18',
		'campo19',
		'campo20',
		'campo21',
		'campo22',
		'campo23',
		'campo24',
		'campo25',
		'campo26',
		'campo27',
		'campo28',
		'campo29',
		'campo30',
		'campo31',
		'campo32',
		'campo33',
		'campo34',
		'campo35',
		'campo36',
		'campo37',
		'campo38',
		'campo39',
		'campo40',
		'campo41',
		'campo42',
		'campo43',
	),
)); ?>
