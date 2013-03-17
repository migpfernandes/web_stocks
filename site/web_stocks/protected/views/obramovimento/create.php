<?php
/* @var $this ObramovimentoController */
/* @var $model Obramovimento */

$this->breadcrumbs=array(
	'Obramovimentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obramovimento', 'url'=>array('index')),
	array('label'=>'Manage Obramovimento', 'url'=>array('admin')),
);
?>

<h1>Create Obramovimento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>