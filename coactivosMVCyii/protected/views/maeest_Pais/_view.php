<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pais_id), array('view', 'id'=>$data->pais_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais_idExterno')); ?>:</b>
	<?php echo CHtml::encode($data->pais_idExterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pordefecto')); ?>:</b>
	<?php echo CHtml::encode($data->pordefecto); ?>
	<br />


</div>