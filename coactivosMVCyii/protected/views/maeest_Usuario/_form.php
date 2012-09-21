<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maeest--usuario-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_idUsuario'); ?>
		<?php echo $form->dropDownList($model,'estado_idUsuario',
		                               CHtml::listData(maeest_Estado::model()->findAll("estadoTipo_id=4"),'estado_id','descripcion')
									   ); ?>
		<?php echo $form->error($model,'estado_idUsuario'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php echo $form->dropDownList($model,'cliente_id',
		                               CHtml::listData(maedin_Cliente::model()->findAll(),'cliente_id','descripcion1'),
									   array('empty'=>'Seleccione un ejecutado')); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grupo_id'); ?>
		<?php echo $form->dropDownList($model,'grupo_id',
		                               CHtml::listData(maeest_Grupo::model()->findAll(),'grupo_id','descripcion'),
									   array('empty'=>'Seleccione un grupo')); ?>
		<?php echo $form->error($model,'grupo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actualizacion'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
			                array(
							      'model'=>$model,
								  'attribute'=>'actualizacion',
								  'language'=>'es',
								  'options'=>array(
								                    'dateformat'=>'yy-mm-dd',
													'constrainInput'=>'false',
													'duration'=>'fast',
													'showAnim'=>'slide',
													),
								  )
							);?>
		<?php echo $form->error($model,'actualizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_idActualizacion'); ?>
		<?php echo $form->textField($model,'usuario_idActualizacion',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usuario_idActualizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_actualizacion'); ?>
		<?php echo $form->textField($model,'usuario_actualizacion'); ?>
		<?php echo $form->error($model,'usuario_actualizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->