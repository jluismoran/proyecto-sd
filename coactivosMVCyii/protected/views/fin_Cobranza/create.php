<?php
$this->breadcrumbs=array(
	'Cobranzas'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Cobranzas', 'url'=>array('index')),
	array('label'=>'Gestionar Cobranzas', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScriptFile('js/fancybox/jquery.mousewheel-3.0.4.pack.js');
Yii::app()->clientScript->registerScriptFile('js/fancybox/jquery.fancybox-1.3.4.pack.js');
Yii::app()->clientScript->registerScriptFile('js/jquery-ui-1.8.19.custom.min.js');
Yii::app()->clientScript->registerCssFile('css/smoothness/jquery-ui-1.8.19.custom.css');
Yii::app()->clientScript->registerCssFile('js/fancybox/jquery.fancybox-1.3.4.css');

Yii::app()->clientScript->registerScript('jquery5', "
    function seleccionar_cliente(cliente){
  $('#fin_Cobranza_cliente_id').val(cliente);
}",CClientScript::POS_HEAD);
    
    
Yii::app()->clientScript->registerScript('search', "

$('#fin_Cobranza_cliente_id').css('background-color','white');
$('#fin_Cobranza_cliente_id').css('color','blue');

$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('fin--cobranza-grid', {
		data: $(this).serialize()
	});
	return false;
});
	
	var total = 0;
	$('.deuda_check').each(function(){
		total = total + parseFloat($(this).attr('amount'));
	});
	
	$('#total_deuda').val(total);
	
	var total_seleccionado = 0;
	$('.deuda_check').click(function(){
		total_seleccionado = 0;
		$('#total_seleccionado').val(total_seleccionado);
		$('.deuda_check').each(function(){
			if($(this).attr('checked') == 'checked'){
				
				total_seleccionado = total_seleccionado + parseFloat($(this).attr('amount'));
				$('#total_seleccionado').val(total_seleccionado);
			}
			
		});
		
	});
	
	$('#fecha').datepicker({
		dateFormat : 'yy-mm-dd',
	});
	

	$('#buscar_cliente').fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200,
		'showCloseButton'		:	true,
    'modal' : true,
    'width'          : 950,
    'height'         : 750,
    'type'	         : 'iframe',
		'overlayShow'	:	false
	});

");
?>

<h1>Nueva Cobranza</h1>

<!--h1>Gestionar Cobranzas</h1>-->

<div class="search-form" > 

<form method="post" action="">

Seleccionar cliente : <input name="cliente_id" id="fin_Cobranza_cliente_id" 
	   value="<?php echo (isset($_POST['cliente_id']) ? $_POST['cliente_id'] : ''); ?>">

<a href="./?r=cliente/admin" title='Buscar clientes' id="buscar_cliente"><img src="images/icono_buscar.png" ></a><br>
<?php //if(!isset($_POST['cliente_id'])): ?>
<!-- Fecha : <input type="text" name="fecha" id="fecha" 
value="<?php //echo (isset($_POST['fecha']) ? $_POST['fecha'] : ''); ?>" size="8"><br> -->
<?php //endif; ?>
<input type="submit" name="send" value="Buscar Deudas">
</form>
</div><!-- search-form -->

<form method="post" name="lista_deudas" action="./?r=fin_Cobranza/guardar">

<?php if(isset($_POST['cliente_id'])): ?>
<input type="hidden" name="cliente_id" value="<?php echo (isset($_POST['cliente_id']) ? $_POST['cliente_id'] : ''); ?>">
<?php

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fin--cobranza-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>  array( 
		'deuda_id',
		'complementoDocumento.descripcion',
		'complementoMateria.descripcion',
		'estadoDeuda.descripcion',
		'importe',
		array(
			'header' => 'Elegir',
			'type' => 'raw',
			'value' => 'CHtml::checkBox("lista_deudas[]", false, array("class" => "deuda_check","value" => $data->deuda_id,"amount" => $data->importe))',
		),
	),
)); ?>

Total Deuda : S/.<input type="text" name="total_deuda" id="total_deuda" value="" readonly size="8"><br><br>
Total Seleccionado : S/.<input type="text" name="total_seleccionado" id="total_seleccionado" value="" readonly size="8"><br><br>
<input type="submit" name="guardar_deuda" value="Guardar">

<?php endif; ?>

</form>
