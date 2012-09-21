<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Grupos', 'url'=>array('index')),
	array('label'=>'Crear Grupo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('maeest--grupo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Grupos</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maeest--grupo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'grupo_id',
		array('name'=>'estado_idGrupo', 'value'=>'$data->estado_grupo->descripcion'),
		'descripcion',
		'pordefecto',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
