<?php
/* @var $this MovimentoController */
/* @var $model Movimento */

$this->breadcrumbs=array(
	'Movimentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Movimento', 'url'=>array('index')),
	array('label'=>'Manage Movimento', 'url'=>array('admin')),
);
?>

<h1>Create Movimento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>