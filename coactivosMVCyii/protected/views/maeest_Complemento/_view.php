<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('complemento_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->complemento_id), array('view', 'id'=>$data->complemento_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complementoTipo_id')); ?>:</b>
	<?php echo CHtml::encode($data->complementosTipos->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pordefecto')); ?>:</b>
	<?php echo CHtml::encode($data->pordefecto); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('complementoTipo_id')); ?>:</b>
	<?php echo CHtml::encode($data->plantilla->nombre); ?>
	<br />


</div>