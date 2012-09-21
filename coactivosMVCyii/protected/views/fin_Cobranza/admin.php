<?php
$this->breadcrumbs=array(
	'Cobranzas'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar Cobranzas', 'url'=>array('index')),
	array('label'=>'Crear Cobranza', 'url'=>array('create')),
);

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maedin--cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'cobranza_id',			  
		  'type'=>'raw',			  			  			  		  
		  'value'=>'CHtml::link($data->cobranza_id,
		  $this->grid->controller->createUrl("view",array("id"=>$data->cobranza_id)))',
		  'htmlOptions' => array('style' => 'text-align:center')			  
		  ),						  			  
		array('name'=>'cliente_id',			  
			  'type'=>'raw',			  			  			  			  
			  'value'=>'CHtml::link($data->cliente->descripcion1. " " . $data->cliente->descripcion2,
			  $this->grid->controller->createUrl("view",array("id"=>$data->cobranza_id)))'			  
			  ),	
			  
		// array( 'header' => 'Cliente' ,'name'=>'cliente_search', 'value'=>'$data->cliente->descripcion1' ),//
		'fecha',
		
		
		array( 'header' => 'Moneda' ,'name'=>'moneda_search', 'value'=>'$data->moneda->descripcion' ),		
		array('name'=>'importe',			  
  			  'value'=>'number_format($data->importe,2)',
 			  'htmlOptions' => array('style' => 'text-align:right; color:brown;')),//color						  			   	
		
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?>
