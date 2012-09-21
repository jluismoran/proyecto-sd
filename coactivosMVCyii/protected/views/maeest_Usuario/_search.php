<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'usuario_id'); ?>
		<?php echo $form->textField($model,'usuario_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_idUsuario'); ?>
		<?php echo $form->textField($model,'estado_idUsuario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grupo_id'); ?>
		<?php echo $form->textField($model,'grupo_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'password'); ?>
		<?php echo $form->textField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actualizacion'); ?>
		<?php echo $form->textField($model,'actualizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_idActualizacion'); ?>
		<?php echo $form->textField($model,'usuario_idActualizacion',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_actualizacion'); ?>
		<?php echo $form->textField($model,'usuario_actualizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->