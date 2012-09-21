<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cliente_id), array('view', 'id'=>$data->cliente_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_idExterno')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_idExterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion1')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion2')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->nro_identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dst_id')); ?>:</b>
	<?php echo CHtml::encode($data->dst_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_idDeuda')); ?>:</b>
	<?php echo CHtml::encode($data->estado_idDeuda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saldo')); ?>:</b>
	<?php echo CHtml::encode($data->saldo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento_idMoneda')); ?>:</b>
	<?php echo CHtml::encode($data->complemento_idMoneda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_saldo')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_saldo); ?>
	<br />

	*/ ?>

</div>