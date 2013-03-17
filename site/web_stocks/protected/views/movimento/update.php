<?php
/* @var $this MovimentoController */
/* @var $model Movimento */

$this->breadcrumbs=array(
	'Movimentos'=>array('index'),
	$model->idmovimento=>array('view','id'=>$model->idmovimento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Movimento', 'url'=>array('index')),
	array('label'=>'Create Movimento', 'url'=>array('create')),
	array('label'=>'View Movimento', 'url'=>array('view', 'id'=>$model->idmovimento)),
	array('label'=>'Manage Movimento', 'url'=>array('admin')),
);
?>

<h1>Update Movimento <?php echo $model->idmovimento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>