<?php
/* @var $this ObraController */
/* @var $model Obra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idobra'); ?>
		<?php echo $form->textField($model,'idobra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>4000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datainicio'); ?>
		<?php echo $form->textField($model,'datainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datafim'); ?>
		<?php echo $form->textField($model,'datafim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clienteid'); ?>
		<?php echo $form->textField($model,'clienteid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->