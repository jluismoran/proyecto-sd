<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'deuda_id'); ?>
		<?php echo $form->textField($model,'deuda_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complemento_idDocumento'); ?>
		<?php echo $form->textField($model,'complemento_idDocumento',array('size'=>10,'maxlength'=>10)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'complemento_idMateria'); ?>
		<?php echo $form->textField($model,'complemento_idMateria',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_expediente'); ?>
		<?php echo $form->textField($model,'nro_expediente',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodo'); ?>
		<?php echo $form->textField($model,'periodo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_referencia'); ?>
		<?php echo $form->textField($model,'nro_referencia',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'importe'); ?>
		<?php echo $form->textField($model,'importe',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complemento_idMoneda'); ?>
		<?php echo $form->textField($model,'complemento_idMoneda',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_emision'); ?>
		<?php echo $form->textField($model,'fecha_emision'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_idDeuda'); ?>
		<?php echo $form->textField($model,'estado_idDeuda',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_idDocumento'); ?>
		<?php echo $form->textField($model,'estado_idDocumento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_id'); ?>
		<?php echo $form->textField($model,'usuario_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->