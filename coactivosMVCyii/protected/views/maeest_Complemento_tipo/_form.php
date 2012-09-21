<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maeest--complemento-tipo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificador'); ?>
		<?php echo $form->textField($model,'identificador',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'identificador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'podefecto'); ?>
		<?php echo $form->textField($model,'podefecto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'podefecto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->