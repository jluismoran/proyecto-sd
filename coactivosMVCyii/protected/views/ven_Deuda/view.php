<?php
$this->breadcrumbs=array(
	'Doc. Coactivos'=>array('index'),
	'Vista'
	//$model->deuda_id,
);

$this->menu=array(
	array('label'=>'Listar Documentos', 'url'=>array('index')),
	array('label'=>'Crear Documento', 'url'=>array('create')),
	array('label'=>'Modificar Documento', 'url'=>array('update', 'id'=>$model->deuda_id)),
	array('label'=>'Eliminar Documento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->deuda_id),'confirm'=>'Estas seguro que deseas borrar este registro?')),
	array('label'=>'Gestionar Documentos', 'url'=>array('admin')),
	//array('label'=>'Exportar en PDF', 'url'=>array('Verplantilla',array('id'=>$model->deuda_id))),
);
?>

<h1>Ver documento # <?php echo $model->deuda_id; ?>
</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'deuda_id',
		array('name'=>'complemento_idDocumento', 'value'=>CHtml::encode($model->complementoDocumento->descripcion)),
		array('name'=>'complemento_idMateria', 'value'=>CHtml::encode($model->complementoMateria->descripcion)),
		array('name'=>'estado_idDocumento', 'value'=>CHtml::encode($model->estadoDocumento->descripcion)),
		array('name'=>'estado_idDeuda', 'value'=>CHtml::encode($model->estadoDeuda->descripcion)),
		array('name'=>'cliente_id', 'value'=>CHtml::encode($model->cliente->descripcion1.' '.$model->cliente->descripcion2)),
		'nro_expediente',
		'periodo',
		'nro_referencia',
		array('name'=>'complemento_idMoneda', 'value'=>CHtml::encode($model->complementoMoneda->descripcion)),
		'importe',
		'fecha_emision',
		//'fecha_vencimiento',
		array('name'=>'usuario_id', 'value'=>CHtml::encode($model->usuario->username)),
	),
)); ?>
