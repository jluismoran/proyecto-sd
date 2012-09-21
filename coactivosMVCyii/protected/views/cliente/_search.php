<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="row">
		<?php echo $form->label($model,'descripcion1'); ?>
		<?php echo $form->textField($model,'descripcion1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion2'); ?>
		<?php echo $form->textField($model,'descripcion2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_identificacion'); ?>
		<?php echo $form->textField($model,'nro_identificacion',array('size'=>20,'maxlength'=>20)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->