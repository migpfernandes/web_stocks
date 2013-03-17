<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->idobra=>array('view','id'=>$model->idobra),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obra', 'url'=>array('index')),
	array('label'=>'Create Obra', 'url'=>array('create')),
	array('label'=>'View Obra', 'url'=>array('view', 'id'=>$model->idobra)),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
);
?>

<h1>Update Obra <?php echo $model->idobra; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>