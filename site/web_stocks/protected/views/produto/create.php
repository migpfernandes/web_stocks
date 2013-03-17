<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Todos os produtos', 'url'=>array('index')),
	array('label'=>'Admnistração', 'url'=>array('admin')),
);
?>

<h1>Create Produto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>