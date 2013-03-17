<?php
/* @var $this ProdutoController */
/* @var $data Produto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproduto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproduto), array('view', 'id'=>$data->idproduto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fornecedorid')); ?>:</b>
	<?php echo CHtml::encode($data->fornecedorid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doccompra')); ?>:</b>
	<?php echo CHtml::encode($data->doccompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidade')); ?>:</b>
	<?php echo CHtml::encode($data->unidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantidade')); ?>:</b>
	<?php echo CHtml::encode($data->quantidade); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('precoUnit')); ?>:</b>
	<?php echo CHtml::encode($data->precoUnit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precototal')); ?>:</b>
	<?php echo CHtml::encode($data->precototal); ?>
	<br />

	*/ ?>

</div>