<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->prov_id), array('view', 'id'=>$data->prov_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_id')); ?>:</b>
	<?php echo CHtml::encode($data->dep_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prov_idExterno')); ?>:</b>
	<?php echo CHtml::encode($data->prov_idExterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pordefecto')); ?>:</b>
	<?php echo CHtml::encode($data->pordefecto); ?>
	<br />


</div>