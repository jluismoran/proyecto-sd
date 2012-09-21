<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('deuda_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->deuda_id), array('view', 'id'=>$data->deuda_id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento_idDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->complementoDocumento->descripcion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento_idMateria')); ?>:</b>
	<?php echo CHtml::encode($data->complementoMateria->descripcion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_idDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->estadoDocumento->descripcion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_idDeuda')); ?>:</b>
	<?php echo CHtml::encode($data->estadoDeuda->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente->descripcion1.' '.$data->cliente->descripcion2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_expediente')); ?>:</b>
	<?php echo CHtml::encode($data->nro_expediente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo')); ?>:</b>
	<?php echo CHtml::encode($data->periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_referencia')); ?>:</b>
	<?php echo CHtml::encode($data->nro_referencia); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento_idMoneda')); ?>:</b>
	<?php echo CHtml::encode($data->complementoMoneda->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('importe')); ?>:</b>
	<?php echo CHtml::encode($data->importe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_emision')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_emision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuario->username); ?>
	<br />
</div>