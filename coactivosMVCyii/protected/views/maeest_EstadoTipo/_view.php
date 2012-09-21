<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoTipo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->estadoTipo_id), array('view', 'id'=>$data->estadoTipo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pordefecto')); ?>:</b>
	<?php echo CHtml::encode($data->pordefecto); ?>
	<br />


</div>