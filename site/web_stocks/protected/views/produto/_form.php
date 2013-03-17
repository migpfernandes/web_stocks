<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produto-form',
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
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>3000)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidade'); ?>
		<?php echo $form->textField($model,'unidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precoUnit'); ?>
		<?php echo $form->textField($model,'precoUnit',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'precoUnit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precototal'); ?>
		<?php echo $form->textField($model,'precototal',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'precototal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->