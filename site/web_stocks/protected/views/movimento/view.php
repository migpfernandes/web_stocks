<?php
/* @var $this MovimentoController */
/* @var $model Movimento */

$this->breadcrumbs=array(
	'Movimentos'=>array('index'),
	$model->idmovimento,
);

$this->menu=array(
	array('label'=>'List Movimento', 'url'=>array('index')),
	array('label'=>'Create Movimento', 'url'=>array('create')),
	array('label'=>'Update Movimento', 'url'=>array('update', 'id'=>$model->idmovimento)),
	array('label'=>'Delete Movimento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmovimento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Movimento', 'url'=>array('admin')),
);
?>

<h1>View Movimento #<?php echo $model->idmovimento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmovimento',
		'fornecedorid',
		'doccompra',
		'produtoid',
		'quantidade',
		'precounit',
		'precototal',
		'data',
	),
)); ?>
