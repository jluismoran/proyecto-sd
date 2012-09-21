<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cobranza_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cobranza_id), array('view', 'id'=>$data->cobranza_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente->descripcion1); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento_idMoneda')); ?>:</b>
	<?php echo CHtml::encode($data->moneda->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_idDeuda')); ?>:</b>
	<?php echo CHtml::encode($data->deuda->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuario->username); ?>
	<br />

</div>