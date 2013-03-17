<?php
/* @var $this ObramovimentoController */
/* @var $model Obramovimento */

$this->breadcrumbs=array(
	'Obramovimentos'=>array('index'),
	$model->idobramovimento=>array('view','id'=>$model->idobramovimento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obramovimento', 'url'=>array('index')),
	array('label'=>'Create Obramovimento', 'url'=>array('create')),
	array('label'=>'View Obramovimento', 'url'=>array('view', 'id'=>$model->idobramovimento)),
	array('label'=>'Manage Obramovimento', 'url'=>array('admin')),
);
?>

<h1>Update Obramovimento <?php echo $model->idobramovimento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>