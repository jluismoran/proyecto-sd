<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maeest--complemento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'complementoTipo_id'); ?>
		<?php echo $form->dropDownList($model,'complementoTipo_id',
		                               CHtml::listData(maeest_Complemento_tipo::model()->findAll(),'complementoTipo_id','descripcion'),
									   array('empty'=>'Seleccione un complemento tipo')); ?>
		<?php echo $form->error($model,'complementoTipo_id'); ?>
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
	
	<div class="row">
		<?php echo $form->labelEx($model,'plantilla_id'); ?>
		<?php echo $form->dropDownList($model,'plantilla_id',
		                               CHtml::listData(maeest_Plantilla::model()->findAll(),'plantilla_id','nombre'),
									   array('empty'=>'Seleccione una plantilla')); ?>
		<?php echo $form->error($model,'plantilla_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->