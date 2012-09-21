<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maedin--cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_idExterno'); ?>
		<?php echo $form->textField($model,'cliente_idExterno',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cliente_idExterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion1'); ?>
		<?php echo $form->textField($model,'descripcion1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion2'); ?>
		<?php echo $form->textField($model,'descripcion2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_identificacion'); ?>
		<?php echo $form->textField($model,'nro_identificacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nro_identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dst_id'); ?>
		<?php echo $form->textField($model,'dst_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dst_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_idDeuda'); ?>
		<?php echo $form->textField($model,'estado_idDeuda',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estado_idDeuda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldo'); ?>
		<?php echo $form->textField($model,'saldo',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complemento_idMoneda'); ?>
		<?php echo $form->textField($model,'complemento_idMoneda',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'complemento_idMoneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_saldo'); ?>
		<?php echo $form->textField($model,'fecha_saldo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fecha_saldo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->