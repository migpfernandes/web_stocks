<?php
/* @var $this ObraController */
/* @var $model Obra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obra-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>4000)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datainicio'); ?>
		<?php echo $form->textField($model,'datainicio'); ?>
		<?php echo $form->error($model,'datainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datafim'); ?>
		<?php echo $form->textField($model,'datafim'); ?>
		<?php echo $form->error($model,'datafim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clienteid'); ?>
		<?php echo $form->textField($model,'clienteid'); ?>
		<?php echo $form->error($model,'clienteid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->