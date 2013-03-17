<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->idobra,
);

$this->menu=array(
	array('label'=>'List Obra', 'url'=>array('index')),
	array('label'=>'Create Obra', 'url'=>array('create')),
	array('label'=>'Update Obra', 'url'=>array('update', 'id'=>$model->idobra)),
	array('label'=>'Delete Obra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idobra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
);
?>

<h1>View Obra #<?php echo $model->idobra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idobra',
		'codigo',
		'descricao',
		'datainicio',
		'datafim',
		'clienteid',
	),
)); ?>
