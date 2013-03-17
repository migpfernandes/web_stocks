<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	$model->codigo=>array('view','id'=>$model->idobra),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'Todas as obras', 'url'=>array('index')),
	array('label'=>'Criar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->idobra)),
	array('label'=>'Administração', 'url'=>array('admin')),
);
?>

<h1>Atualizar <?php echo $model->codigo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>