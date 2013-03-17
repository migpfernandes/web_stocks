<?php
/* @var $this EntidadeController */
/* @var $model Entidade */

$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	$model->identidade=>array('view','id'=>$model->nome),
	'Atualizar',
);

$this->menu=array(
	array('label'=>'Todas as entidades', 'url'=>array('index')),
	array('label'=>'Criar', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->identidade)),
	array('label'=>'Administração', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>