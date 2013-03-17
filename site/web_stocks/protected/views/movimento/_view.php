<?php
/* @var $this MovimentoController */
/* @var $data Movimento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmovimento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmovimento), array('view', 'id'=>$data->idmovimento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fornecedorid')); ?>:</b>
	<?php echo CHtml::encode($data->fornecedorid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doccompra')); ?>:</b>
	<?php echo CHtml::encode($data->doccompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produtoid')); ?>:</b>
	<?php echo CHtml::encode($data->produtoid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantidade')); ?>:</b>
	<?php echo CHtml::encode($data->quantidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precounit')); ?>:</b>
	<?php echo CHtml::encode($data->precounit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precototal')); ?>:</b>
	<?php echo CHtml::encode($data->precototal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	*/ ?>

</div>