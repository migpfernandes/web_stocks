<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'List Obra', 'url'=>array('index')),
	array('label'=>'Manage Obra', 'url'=>array('admin')),
);
?>

<h1>Criar Obra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>