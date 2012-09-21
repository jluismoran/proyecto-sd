<?php
$this->breadcrumbs=array(
	'Maedin  Clientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List maedin_Cliente', 'url'=>array('index')),
	array('label'=>'Create maedin_Cliente', 'url'=>array('create')),
);
Yii::app()->clientScript->registerScript('jqeury5', "
    function seleccionar_cliente(cliente){
    parent.seleccionar_cliente(cliente);
    parent.$.fancybox.close();

}",CClientScript::POS_HEAD);
    
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
<h1>Buscar Cliente</h1>
<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maedin--cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'descripcion1',
		'descripcion2',
		'nro_identificacion',
    array('type'=>'raw','value'=>'CHtml::link("Seleccionar","#",array("class"=>"search-button","onclick"=>"seleccionar_cliente(\'$data->cliente_id\')"))'),
		/*
		'direccion',
		'estado_idDeuda',
		'saldo',
		'complemento_idMoneda',
		'fecha_saldo',
		*/
	),
)); ?>