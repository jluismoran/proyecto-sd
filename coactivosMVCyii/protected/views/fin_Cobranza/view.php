<?php
$this->breadcrumbs=array(
	'Cobranzas'=>array('index'),
	//$model->cobranza_id,
);

$this->menu=array(
	array('label'=>'Listar Cobranzas', 'url'=>array('index')),
	array('label'=>'Crear Cobranza', 'url'=>array('create')),
	array('label'=>'Modificar Cobranza', 'url'=>array('update', 'id'=>$model->cobranza_id)),
	array('label'=>'Eliminar Cobranza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cobranza_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Cobranzas', 'url'=>array('admin')),
);
?>

<h1>Ver Cobranza # <?php echo $model->cobranza_id; ?>
</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(		
		array('name'=>'estado_idDeuda', 'value'=>CHtml::encode($model->deuda->descripcion)),
		'fecha',
		array('name'=>'cliente_id', 'value'=>CHtml::encode($model->cliente->descripcion1.' '.$model->cliente->descripcion2)),
		array('name'=>'complemento_idMoneda', 'value'=>CHtml::encode($model->moneda->descripcion)),
		'importe',
		array('name'=>'usuario_id', 'value'=>CHtml::encode($model->usuario->username)),
		
	),
));


$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maedin--cliente-grid',
	'dataProvider'=>$dataProvider,	
	'columns'=>array(
		array( 'header' => '#Documento' ,'name'=>'deuda_id', 
			   'htmlOptions'=>array('style'=>'text-align:center;')),
	    array( 'header' => 'Tipo' ,
			   'value'=>'$data->deuda->complementoDocumento->descripcion'),
	    array( 'header' => 'Materia' ,
			   'value'=>'$data->deuda->complementoMateria->descripcion'),
	    array( 'header' => 'Estado' ,'name'=>'estado_id', 
			   'value'=>'$data->deuda->estadoDeuda->descripcion'),
		array( 'header' => 'Fecha Emision' ,
			   'value'=>'$data->deuda->fecha_emision'),
	    array( 'header' => 'Moneda' ,
			   'value'=>'$data->cobranza->moneda->descripcion'),
		array( 'name'=>'importe',
		       'value'=>'number_format($data->importe,2)',
			   'htmlOptions'=>array('style'=>'text-align:right; color:brown')),
		
	),
));
?>
