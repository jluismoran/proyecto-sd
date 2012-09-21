<?php
$this->breadcrumbs=array(
	'Maedin  Clientes'=>array('index'),
	$model->cliente_id,
);

$this->menu=array(
	array('label'=>'List maedin_Cliente', 'url'=>array('index')),
	array('label'=>'Create maedin_Cliente', 'url'=>array('create')),
	array('label'=>'Update maedin_Cliente', 'url'=>array('update', 'id'=>$model->cliente_id)),
	array('label'=>'Delete maedin_Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cliente_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maedin_Cliente', 'url'=>array('admin')),
);
?>

<h1>View maedin_Cliente #<?php echo $model->cliente_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cliente_id',
		'cliente_idExterno',
		'descripcion1',
		'descripcion2',
		'nro_identificacion',
		'dst_id',
		'direccion',
		'estado_idDeuda',
		'saldo',
		'complemento_idMoneda',
		'fecha_saldo',
	),
)); ?>
