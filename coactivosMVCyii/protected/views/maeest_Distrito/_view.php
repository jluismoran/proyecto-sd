<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dst_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dst_id), array('view', 'id'=>$data->dst_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_id')); ?>:</b>
	<?php echo CHtml::encode($data->prov_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dst_idExterno')); ?>:</b>
	<?php echo CHtml::encode($data->dst_idExterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pordefecto')); ?>:</b>
	<?php echo CHtml::encode($data->pordefecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cli_idejecutivo')); ?>:</b>
	<?php echo CHtml::encode($data->cli_idejecutivo); ?>
	<br />


</div>