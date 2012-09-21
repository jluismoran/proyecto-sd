<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->grupo_id), array('view', 'id'=>$data->grupo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_idGrupo')); ?>:</b>
	<?php echo CHtml::encode($data->estado_grupo->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pordefecto')); ?>:</b>
	<?php echo CHtml::encode($data->pordefecto); ?>
	<br />


</div>