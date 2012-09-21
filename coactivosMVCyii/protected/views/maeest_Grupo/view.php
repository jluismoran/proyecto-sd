<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->grupo_id,
);

$this->menu=array(
	array('label'=>'Listar Grupos', 'url'=>array('index')),
	array('label'=>'Crear Grupo', 'url'=>array('create')),
	array('label'=>'Modificar Grupo', 'url'=>array('update', 'id'=>$model->grupo_id)),
	array('label'=>'Eliminar Grupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->grupo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Grupo', 'url'=>array('admin')),
);
?>

<h1>Ver Grupo # <?php echo $model->grupo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'grupo_id',
		array('name'=>'estado_idGrupo', 'value'=>CHtml::encode($model->estado_grupo->descripcion)),
		'descripcion',
		'pordefecto',
	),
)); ?>
