<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maeest--plantilla-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo0'); ?>
		<?php echo $form->textField($model,'campo0',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo0'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo1'); ?>
		<?php echo $form->textField($model,'campo1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo2'); ?>
		<?php echo $form->textField($model,'campo2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo3'); ?>
		<?php echo $form->textField($model,'campo3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo4'); ?>
		<?php echo $form->textField($model,'campo4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo5'); ?>
		<?php echo $form->textField($model,'campo5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo6'); ?>
		<?php echo $form->textField($model,'campo6',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo7'); ?>
		<?php echo $form->textField($model,'campo7',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo8'); ?>
		<?php echo $form->textField($model,'campo8',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo9'); ?>
		<?php echo $form->textField($model,'campo9',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo10'); ?>
		<?php echo $form->textField($model,'campo10',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo11'); ?>
		<?php echo $form->textField($model,'campo11',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo12'); ?>
		<?php echo $form->textField($model,'campo12',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo13'); ?>
		<?php echo $form->textField($model,'campo13',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo14'); ?>
		<?php echo $form->textField($model,'campo14',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo14'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo15'); ?>
		<?php echo $form->textField($model,'campo15',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo15'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo16'); ?>
		<?php echo $form->textField($model,'campo16',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo16'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo17'); ?>
		<?php echo $form->textField($model,'campo17',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo17'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo18'); ?>
		<?php echo $form->textField($model,'campo18',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'campo18'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo19'); ?>
		<?php echo $form->textField($model,'campo19',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo19'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo20'); ?>
		<?php echo $form->textField($model,'campo20',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo20'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo21'); ?>
		<?php echo $form->textField($model,'campo21',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo21'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo22'); ?>
		<?php echo $form->textField($model,'campo22',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'campo22'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo23'); ?>
		<?php echo $form->textField($model,'campo23',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo23'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo24'); ?>
		<?php echo $form->textField($model,'campo24',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo24'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo25'); ?>
		<?php echo $form->textField($model,'campo25',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo25'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo26'); ?>
		<?php echo $form->textField($model,'campo26',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo26'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo27'); ?>
		<?php echo $form->textField($model,'campo27',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo27'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo28'); ?>
		<?php echo $form->textField($model,'campo28',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'campo28'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo29'); ?>
		<?php echo $form->textField($model,'campo29',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo29'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo30'); ?>
		<?php echo $form->textField($model,'campo30',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo30'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo31'); ?>
		<?php echo $form->textField($model,'campo31',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo31'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo32'); ?>
		<?php echo $form->textField($model,'campo32',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo32'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo33'); ?>
		<?php echo $form->textField($model,'campo33',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo33'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo34'); ?>
		<?php echo $form->textField($model,'campo34',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo34'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo35'); ?>
		<?php echo $form->textField($model,'campo35',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo35'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo36'); ?>
		<?php echo $form->textField($model,'campo36',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo36'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo37'); ?>
		<?php echo $form->textField($model,'campo37',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo37'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo38'); ?>
		<?php echo $form->textField($model,'campo38',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo38'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo39'); ?>
		<?php echo $form->textField($model,'campo39',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo39'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo40'); ?>
		<?php echo $form->textField($model,'campo40',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo40'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo41'); ?>
		<?php echo $form->textField($model,'campo41',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo41'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo42'); ?>
		<?php echo $form->textField($model,'campo42',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo42'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'campo43'); ?>
		<?php echo $form->textField($model,'campo43',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'campo43'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->