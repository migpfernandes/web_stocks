<?php
/* @var $this ObraController */
/* @var $data Obra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idobra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idobra), array('view', 'id'=>$data->idobra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datainicio')); ?>:</b>
	<?php echo CHtml::encode($data->datainicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datafim')); ?>:</b>
	<?php echo CHtml::encode($data->datafim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clienteid')); ?>:</b>
	<?php echo CHtml::encode($data->clienteid); ?>
	<br />


</div>