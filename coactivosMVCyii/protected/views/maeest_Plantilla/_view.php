<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('plantilla_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->plantilla_id), array('view', 'id'=>$data->plantilla_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo0')); ?>:</b>
	<?php echo CHtml::encode($data->campo0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo1')); ?>:</b>
	<?php echo CHtml::encode($data->campo1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo2')); ?>:</b>
	<?php echo CHtml::encode($data->campo2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo3')); ?>:</b>
	<?php echo CHtml::encode($data->campo3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('campo4')); ?>:</b>
	<?php echo CHtml::encode($data->campo4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo5')); ?>:</b>
	<?php echo CHtml::encode($data->campo5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo6')); ?>:</b>
	<?php echo CHtml::encode($data->campo6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo7')); ?>:</b>
	<?php echo CHtml::encode($data->campo7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo8')); ?>:</b>
	<?php echo CHtml::encode($data->campo8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo9')); ?>:</b>
	<?php echo CHtml::encode($data->campo9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo10')); ?>:</b>
	<?php echo CHtml::encode($data->campo10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo11')); ?>:</b>
	<?php echo CHtml::encode($data->campo11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo12')); ?>:</b>
	<?php echo CHtml::encode($data->campo12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo13')); ?>:</b>
	<?php echo CHtml::encode($data->campo13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo14')); ?>:</b>
	<?php echo CHtml::encode($data->campo14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo15')); ?>:</b>
	<?php echo CHtml::encode($data->campo15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo16')); ?>:</b>
	<?php echo CHtml::encode($data->campo16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo17')); ?>:</b>
	<?php echo CHtml::encode($data->campo17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo18')); ?>:</b>
	<?php echo CHtml::encode($data->campo18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo19')); ?>:</b>
	<?php echo CHtml::encode($data->campo19); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo20')); ?>:</b>
	<?php echo CHtml::encode($data->campo20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo21')); ?>:</b>
	<?php echo CHtml::encode($data->campo21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo22')); ?>:</b>
	<?php echo CHtml::encode($data->campo22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo23')); ?>:</b>
	<?php echo CHtml::encode($data->campo23); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo24')); ?>:</b>
	<?php echo CHtml::encode($data->campo24); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo25')); ?>:</b>
	<?php echo CHtml::encode($data->campo25); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo26')); ?>:</b>
	<?php echo CHtml::encode($data->campo26); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo27')); ?>:</b>
	<?php echo CHtml::encode($data->campo27); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo28')); ?>:</b>
	<?php echo CHtml::encode($data->campo28); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo29')); ?>:</b>
	<?php echo CHtml::encode($data->campo29); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo30')); ?>:</b>
	<?php echo CHtml::encode($data->campo30); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo31')); ?>:</b>
	<?php echo CHtml::encode($data->campo31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo32')); ?>:</b>
	<?php echo CHtml::encode($data->campo32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo33')); ?>:</b>
	<?php echo CHtml::encode($data->campo33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo34')); ?>:</b>
	<?php echo CHtml::encode($data->campo34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo35')); ?>:</b>
	<?php echo CHtml::encode($data->campo35); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo36')); ?>:</b>
	<?php echo CHtml::encode($data->campo36); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo37')); ?>:</b>
	<?php echo CHtml::encode($data->campo37); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo38')); ?>:</b>
	<?php echo CHtml::encode($data->campo38); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo39')); ?>:</b>
	<?php echo CHtml::encode($data->campo39); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo40')); ?>:</b>
	<?php echo CHtml::encode($data->campo40); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo41')); ?>:</b>
	<?php echo CHtml::encode($data->campo41); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo42')); ?>:</b>
	<?php echo CHtml::encode($data->campo42); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campo43')); ?>:</b>
	<?php echo CHtml::encode($data->campo43); ?>
	<br />

	*/ ?>

</div>