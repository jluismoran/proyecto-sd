<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maeest--departamento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pais_id'); ?>
		<?php echo $form->textField($model,'pais_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pais_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_idExterno'); ?>
		<?php echo $form->textField($model,'dep_idExterno',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dep_idExterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pordefecto'); ?>
		<?php echo $form->textField($model,'pordefecto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pordefecto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->