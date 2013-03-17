<?php
/* @var $this ObramovimentoController */
/* @var $model Obramovimento */

$this->breadcrumbs=array(
	'Obramovimentos'=>array('index'),
	$model->idobramovimento,
);

$this->menu=array(
	array('label'=>'List Obramovimento', 'url'=>array('index')),
	array('label'=>'Create Obramovimento', 'url'=>array('create')),
	array('label'=>'Update Obramovimento', 'url'=>array('update', 'id'=>$model->idobramovimento)),
	array('label'=>'Delete Obramovimento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idobramovimento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obramovimento', 'url'=>array('admin')),
);
?>

<h1>View Obramovimento #<?php echo $model->idobramovimento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idobramovimento',
		'obraid',
		'produtoid',
		'descricao',
		'data',
	),
)); ?>
