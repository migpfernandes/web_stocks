<?php
/* @var $this EntidadeController */
/* @var $model Entidade */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entidade-form',
	'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morada'); ?>
		<?php echo $form->textField($model,'morada',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'morada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidade'); ?>
		<?php echo $form->textField($model,'localidade',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'localidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codpostal'); ?>
		<?php echo $form->textField($model,'codpostal',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codpostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telemovel'); ?>
		<?php echo $form->textField($model,'telemovel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telemovel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site'); ?>
		<?php echo $form->textField($model,'site',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoentidade'); ?>
		<?php echo $form->textField($model,'tipoentidade',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tipoentidade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->