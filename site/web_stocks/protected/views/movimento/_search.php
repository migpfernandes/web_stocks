<?php
/* @var $this MovimentoController */
/* @var $model Movimento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idmovimento'); ?>
		<?php echo $form->textField($model,'idmovimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fornecedorid'); ?>
		<?php echo $form->textField($model,'fornecedorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doccompra'); ?>
		<?php echo $form->textField($model,'doccompra',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produtoid'); ?>
		<?php echo $form->textField($model,'produtoid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precounit'); ?>
		<?php echo $form->textField($model,'precounit',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precototal'); ?>
		<?php echo $form->textField($model,'precototal',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->