<?php
$this->breadcrumbs=array(
	'Maeest  Estados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List maeest_Estado', 'url'=>array('index')),
	array('label'=>'Create maeest_Estado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('maeest--estado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Maeest  Estados</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maeest--estado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'estado_id',
		array('name'=>'estadoTipo_id', 'value'=>'$data->estadosTipos->descripcion'),
		'descripcion',
		'pordefecto',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
