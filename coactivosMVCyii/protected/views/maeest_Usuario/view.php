<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	//$model->usuario_id,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Modificar Usuario', 'url'=>array('update', 'id'=>$model->usuario_id)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Ver Usuario # <?php echo $model->usuario_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usuario_id',
		array('name'=>'estado_idUsuario', 'value'=>CHtml::encode($model->estado_usuario->descripcion)),
		'username',
		'password',
		array('name'=>'cliente_id', 'value'=>CHtml::encode($model->cliente->descripcion1)),
		array('name'=>'grupo_id', 'value'=>CHtml::encode($model->grupo->descripcion)),
		'actualizacion',
		'usuario_idActualizacion',
		'usuario_actualizacion',
	),
)); ?>
