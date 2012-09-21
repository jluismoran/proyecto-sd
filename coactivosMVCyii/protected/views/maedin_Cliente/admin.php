<?php
$this->breadcrumbs=array(
	'Ejecutados'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar ejecutados', 'url'=>array('index')),
	array('label'=>'Crear ejecutado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('maedin--cliente-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Ejecutados</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maedin--cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(		
		array('name'=>'cliente_id',			  
		'type'=>'raw',			  			  			  
		//'value'=>'$data->cliente->descripcion2. " " . $data->cliente->descripcion1',
		'value'=>'CHtml::link($data->cliente_id,
		$this->grid->controller->createUrl("update",array("id"=>$data->cliente_id)))',
		'htmlOptions' => array('style' => 'text-align:center')
		),						  
			  
		'nro_identificacion',		
				array('name'=>'descripcion1',			  
		'type'=>'raw',			  			  			  		
		'value'=>'CHtml::link($data->descripcion1,
		$this->grid->controller->createUrl("update",array("id"=>$data->cliente_id)))'		
		),						  
				array('name'=>'descripcion2',			  
		'type'=>'raw',			  			  			  
		//'value'=>'$data->cliente->descripcion2. " " . $data->cliente->descripcion1',
		'value'=>'CHtml::link($data->descripcion2,
		$this->grid->controller->createUrl("update",array("id"=>$data->cliente_id)))'		
		),						  	
		
		array('name'=>'dst_id', 'value'=>'$data->distrito->descripcion'),
		'direccion',
		array('name'=>'complemento_idMoneda', 'value'=>'$data->moneda->descripcion'),
		
		array('name'=>'saldo',			  
		'value'=>'number_format($data->saldo,2)',
		'htmlOptions' => array('style' => 'text-align:right; color:brown;')),						  			   
		//'fecha_saldo',		
		array(
			'class'=>'CButtonColumn',
		),
	),
));

?>
