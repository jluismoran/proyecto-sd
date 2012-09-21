<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('complementoTipo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->complementoTipo_id), array('view', 'id'=>$data->complementoTipo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificador')); ?>:</b>
	<?php echo CHtml::encode($data->identificador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('podefecto')); ?>:</b>
	<?php echo CHtml::encode($data->podefecto); ?>
	<br />


</div>