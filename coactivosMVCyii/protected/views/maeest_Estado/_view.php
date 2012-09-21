<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->estado_id), array('view', 'id'=>$data->estado_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoTipo_id')); ?>:</b>
	<?php echo CHtml::encode($data->estadosTipos->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pordefecto')); ?>:</b>
	<?php echo CHtml::encode($data->pordefecto); ?>
	<br />


</div>