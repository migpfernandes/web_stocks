<?php
/* @var $this MovimentoController */
/* @var $model Movimento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'movimento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fornecedorid'); ?>
		<?php echo $form->textField($model,'fornecedorid'); ?>
		<?php echo $form->error($model,'fornecedorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doccompra'); ?>
		<?php echo $form->textField($model,'doccompra',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'doccompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produtoid'); ?>
		<?php echo $form->textField($model,'produtoid'); ?>
		<?php echo $form->error($model,'produtoid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade'); ?>
		<?php echo $form->error($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precounit'); ?>
		<?php echo $form->textField($model,'precounit',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'precounit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precototal'); ?>
		<?php echo $form->textField($model,'precototal',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'precototal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->