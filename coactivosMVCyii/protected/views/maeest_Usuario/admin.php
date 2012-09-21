<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('maeest--usuario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Usuarios</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maeest--usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'usuario_id',
		array('name'=>'estado_idUsuario', 'value'=>'$data->estado_usuario->descripcion'),
		'username',
		'password',
		array('name'=>'cliente_id', 'type'=>'raw', 'value'=>'$data->cliente->descripcion2. " " . $data->cliente->descripcion1',),
		array('name'=>'grupo_id', 'value'=>'$data->grupo->descripcion'),
		/*'actualizacion',
		'usuario_idActualizacion',
		'usuario_actualizacion',*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
