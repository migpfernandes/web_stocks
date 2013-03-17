<?php
/* @var $this EntidadeController */
/* @var $data Entidade */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('identidade')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->identidade), array('view', 'id'=>$data->identidade)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('morada')); ?>:</b>
	<?php echo CHtml::encode($data->morada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidade')); ?>:</b>
	<?php echo CHtml::encode($data->localidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codpostal')); ?>:</b>
	<?php echo CHtml::encode($data->codpostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telemovel')); ?>:</b>
	<?php echo CHtml::encode($data->telemovel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site')); ?>:</b>
	<?php echo CHtml::encode($data->site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoentidade')); ?>:</b>
	<?php echo CHtml::encode($data->tipoentidade); ?>
	<br />

	*/ ?>

</div>