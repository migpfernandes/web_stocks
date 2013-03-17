<?php
/* @var $this EntidadeController */
/* @var $model Entidade */

$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Todas as entidades', 'url'=>array('index')),
	array('label'=>'Administração', 'url'=>array('admin')),
);
?>

<h1>Criar um cliente ou um fornecedor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>