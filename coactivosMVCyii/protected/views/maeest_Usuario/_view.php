<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuario_id), array('view', 'id'=>$data->usuario_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->estado_usuario->descripcion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente->descripcion1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo_id')); ?>:</b>
	<?php echo CHtml::encode($data->grupo->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->actualizacion); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_idActualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_idActualizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_actualizacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_actualizacion); ?>
	<br />


</div>