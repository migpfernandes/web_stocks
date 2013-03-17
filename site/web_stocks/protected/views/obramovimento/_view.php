<?php
/* @var $this ObramovimentoController */
/* @var $data Obramovimento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idobramovimento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idobramovimento), array('view', 'id'=>$data->idobramovimento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obraid')); ?>:</b>
	<?php echo CHtml::encode($data->obraid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produtoid')); ?>:</b>
	<?php echo CHtml::encode($data->produtoid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />


</div>