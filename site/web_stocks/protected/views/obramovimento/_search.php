<?php
/* @var $this ObramovimentoController */
/* @var $model Obramovimento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idobramovimento'); ?>
		<?php echo $form->textField($model,'idobramovimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obraid'); ?>
		<?php echo $form->textField($model,'obraid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produtoid'); ?>
		<?php echo $form->textField($model,'produtoid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>3000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->