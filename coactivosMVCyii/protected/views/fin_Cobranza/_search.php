<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cobranza_id'); ?>
		<?php echo $form->textField($model,'cobranza_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_id'); ?>
		<?php echo $form->textField($model,'usuario_id',array('size'=>10,'maxlength'=>10)); ?>
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
		<?php echo $form->label($model,'estado_idDeuda'); ?>
		<?php echo $form->textField($model,'estado_idDeuda',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->