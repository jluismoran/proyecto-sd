<?php
$this->breadcrumbs=array(
	'Doc. Coactivos'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listar documentos', 'url'=>array('index')),
	array('label'=>'Crear documento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ven--deuda-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Documentos Coactivos</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ven--deuda-grid',
	'dataProvider'=>$model->search(),	
	'filter'=>$model,
	'columns'=>array(
		array('name'=>'deuda_id',			  
			  'type'=>'raw',			  			  			  
			  'value'=>'CHtml::link($data->deuda_id,
			  $this->grid->controller->createUrl("update",array("id"=>$data->deuda_id)))',
			  'htmlOptions' => array('style' => 'text-align:center')			  
			  ),						  			  
		array('name'=>'complemento_idDocumento',
		      'type'=>'raw',
		      'value'=>'$data->complementoDocumento->descripcion."<br>".CHtml::link(Ver." ".Plantilla,
			  $this->grid->controller->createUrl("Verplantilla",array("id"=>$data->deuda_id,"doc"=>$data->complemento_idDocumento)),array(target=>_blank))'
			  ),
		array('name'=>'complemento_idMateria',
		      'type'=>'raw',
		      'value'=>'$data->complementoMateria->descripcion'
			  ),
		array('name'=>'estado_idDocumento', 'value'=>'$data->estadoDocumento->descripcion'),		
		array('name'=>'cliente_id',			  
			  'type'=>'raw',			  			  			  
			  'value'=>'CHtml::link($data->cliente->descripcion1. " " . $data->cliente->descripcion2,
			  $this->grid->controller->createUrl("update",array("id"=>$data->deuda_id)))'						 
			  ),						  
		'nro_expediente',		
		'periodo',
		'fecha_emision',
		//'fecha_vencimiento',		
		//'nro_referencia',
		array('name'=>'complemento_idMoneda', 
			  //'filter' => CHtml::listData(maeest_Complemento::model()->findAll(), 'complemento_id', 'descripcion'), // fields from country table),
			  'value'=>'$data->complementoMoneda->descripcion',
			  ),
		array('name'=>'importe',			  
			  'value'=>'number_format($data->importe,2)',
			   'htmlOptions' => array('style' => 'text-align:right; color:brown; height: 80px;')),//color
        /*array('name'=>'saldo',			  
			  'value'=>'number_format($data->saldo,2)',
			   'htmlOptions' => array('style' => 'text-align:right; color:brown; height: 80px;')),*/			
		array('name'=>'estado_idDeuda', 'value'=>'$data->estadoDeuda->descripcion',
			  'htmlOptions' => array('style' => 'text-align:center; color:brown')),//color
		//array('name'=>'usuario_id', 'value'=>'$data->usuario->username'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
