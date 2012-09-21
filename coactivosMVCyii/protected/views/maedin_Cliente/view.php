<?php
$this->breadcrumbs=array(
	'Ejecutados'=>array('index'),
	//$model->cliente_id,
);

$this->menu=array(
	array('label'=>'Listar ejecutados', 'url'=>array('index')),
	array('label'=>'Crear ejecutado', 'url'=>array('create')),
	array('label'=>'Modificar ejecutado', 'url'=>array('update', 'id'=>$model->cliente_id)),
	array('label'=>'Eliminar ejecutado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cliente_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar ejecutados', 'url'=>array('admin')),
);
?>

<h1>Ver Ejecutado # <?php echo $model->cliente_id; ?>
</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'cliente_id',
		array('name'=>'estado_idDeuda', 'value'=>CHtml::encode($model->estado_cliente->descripcion)),
		'cliente_idExterno',
		'descripcion1',
		'descripcion2',
		'nro_identificacion',
		array('name'=>'dst_id', 'value'=>CHtml::encode($model->distrito->descripcion)),
		'direccion',
		array('name'=>'complemento_idMoneda', 'value'=>CHtml::encode($model->moneda->descripcion)),
		'saldo',
		'fecha_saldo',
	),
)); ?>
