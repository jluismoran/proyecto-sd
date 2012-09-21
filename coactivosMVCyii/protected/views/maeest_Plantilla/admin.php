<?php
$this->breadcrumbs=array(
	'Maeest  Plantillas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List maeest_Plantilla', 'url'=>array('index')),
	array('label'=>'Create maeest_Plantilla', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('maeest--plantilla-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Maeest  Plantillas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maeest--plantilla-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'plantilla_id',
		'nombre',
		'descripcion',
		'campo0',
		'campo1',
		'campo2',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
