<form method="post" name="form">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ven--deuda-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	/*'focus'=>array($model,'importe'),
    'clientOptions'=>array(
		'validateOnSubmit'=>true,
	)*/
)); 
?>

<script>
function calculaFecha()
{ 
  var num = document.form.dias.value; 
  var f = document.form.fecha_emision.value; 
  // pasaremos la fecha a formato mm/dd/yyyy 
  f = f.split('/'); 
  f = f[1]+'/'+f[0]+'/'+f[2]; 
  // 
  var hoy = new Date(f); 
  hoy.setTime(hoy.getTime() + (num * 24 * 3600 * 1000));
  var mes = hoy.getMonth() + 1;
  if(mes < 10) mes = '0' + mes;
  var fecha = hoy.getDate() + '/' + mes + '/' + hoy.getFullYear();
  document.form.fecha_vencimiento.value = fecha; 
}
</script>
<script>
$(document).ready(function(){
$('#cliente_id').css("width","60px");
$('#cli').css("background","#999999");
});
</script>
<script>
function format()
{
  var num = document.form.importe.value.replace(/\,/g,"");
  if(!isNaN(num)){
    num = num.toString().split("").reverse().join("").replace(/(?=\d*\.?)(\d{3})/g,'$1,');
    num = num.split("").reverse().join("").replace(/^[\,]/,"");
    document.form.importe.value = num;
   }else{ 
       alert('Solo se permiten números');
       document.form.importe.value = document.form.importe.value.replace(/[^\d\.]*/g,"");
       }
}
</script>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
      
	<div class="row">
		<?php echo $form->labelEx($model,'complemento_idDocumento'); ?>
		<?php echo $form->dropDownList($model,'complemento_idDocumento',
		                               CHtml::listData(maeest_Complemento::model()->findAll("complementoTipo_id = 1"),'complemento_id','descripcion'),
									   array('empty'=>'Seleccione el tipo de documento')); ?>
		<?php echo $form->error($model,'complemento_idDocumento'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'complemento_idMateria'); ?>
		<?php echo $form->dropDownList($model,'complemento_idMateria',
		                               CHtml::listData(maeest_Complemento::model()->findAll("complementoTipo_id = 3"),'complemento_id','descripcion')
									   );?>
		<?php echo $form->error($model,'complemento_idMateria'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'estado_idDocumento'); ?>
		<?php echo $form->dropDownList($model,'estado_idDocumento',
		                               CHtml::listData(maeest_Estado::model()->findAll("estadoTipo_id = 1"),'estado_id','descripcion')
									   );?>
		<?php echo $form->error($model,'estado_idDocumento'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'estado_idDeuda'); ?>
		<?php echo $form->dropDownList($model,'estado_idDeuda',
		                               CHtml::listData(maeest_Estado::model()->findAll("estadoTipo_id = 2"),'estado_id','descripcion')
									   ); ?>
		<?php echo $form->error($model,'estado_idDeuda'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php
		        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
				             
                             'name'=>'cliente_id',
							 'attribute'=>'cliente_id',
                             'model'=>$model,
                             'sourceUrl'=>$this->createUrl('ListarClientes'),
                             'options'=>array(
                             'minLength'=>'1',
                             'showAnim'=>'fold',
							 //$('#cliente_id').css('display','none');
                             'select' => "js:function(event, ui)
                                             { $('#cliente_id').val(ui.item.id);
											 $('#cli').val(ui.item.label);
											 }"
                                        ),
                           ));?>
		<?php echo $form->error($model,'cliente_id'); ?>
		<input type="text" name="cli" id="cli" size="20" readonly>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_expediente'); ?>
		<?php echo $form->textField($model,'nro_expediente',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nro_expediente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo'); ?>
		<?php echo $form->textField($model,'periodo',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_referencia'); ?>
		<?php echo $form->textField($model,'nro_referencia',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nro_referencia'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'complemento_idMoneda'); ?>
		<?php echo $form->dropDownList($model,'complemento_idMoneda',
		                               CHtml::listData(maeest_Complemento::model()->findAll("complementoTipo_id = 2"),'complemento_id','descripcion')
									   );?>
		<?php echo $form->error($model,'complemento_idMoneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'importe'); ?>
		<?php echo $form->textField($model,'importe',array('id'=>'importe','size'=>16,'maxlength'=>16, 'onkeyup'=>'format()')); ?>	
		<?php echo $form->error($model,'importe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_emision'); ?>		
		<?php echo $form->textField($model,'fecha_emision',array('id'=>'fecha_emision','value'=>date('d/m/Y'),'readonly'=>true));?>
		<?php echo $form->error($model,'fecha_emision'); ?>
	</div>

	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'fecha_vencimiento'); ?>
		Días: <input type="text" name="dias" id="dias" size="8">
		<?php //echo $form->textField($model,'fecha_vencimiento',array('id'=>'fecha_vencimiento','onFocus'=>'calculaFecha()'));
              /*$this->widget('zii.widgets.jui.CJuiDatePicker',
			                array(
							      'model'=>$model,
								  'attribute'=>'fecha_vencimiento',
								  'language'=>'es',
								  'options'=>array(
								                    'dateformat'=>'d-m-Y',
													'buttonImage'=>Yii::app()->baseUrl.'/images/icono_calendario.gif',
													'constrainInput'=>'false',
													'duration'=>'fast',
													'showAnim'=>'slide',
													),
								  )
							);*/
		?>
		<?php //echo $form->error($model,'fecha_vencimiento'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'#Usuario ('.Yii::app()->user->name.')');?>
		<?php echo $form->textField($model,'usuario_id',array('value'=>Yii::app()->user->id,'readonly'=>true));?>
		<?php echo $form->error($model,'usuario_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</form>