<?php
/* @var $this EntidadeController */
/* @var $model Entidade */

$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	$model->identidade=>array('view','id'=>$model->identidade),
	'Update',
);

$this->menu=array(
	array('label'=>'List Entidade', 'url'=>array('index')),
	array('label'=>'Create Entidade', 'url'=>array('create')),
	array('label'=>'View Entidade', 'url'=>array('view', 'id'=>$model->identidade)),
	array('label'=>'Manage Entidade', 'url'=>array('admin')),
);
?>

<h1>Update Entidade <?php echo $model->identidade; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>