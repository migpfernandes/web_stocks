<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs=array(
	'Produtos'=>array('index'),
	$model->idproduto=>array('view','id'=>$model->nome),
	'Update',
);

$this->menu=array(
	array('label'=>'Todos os produtos', 'url'=>array('index')),
	array('label'=>'Criar', 'url'=>array('create')),
	array('label'=>'Ver produto', 'url'=>array('view', 'id'=>$model->idproduto)),
	array('label'=>'Administração', 'url'=>array('admin')),
);
?>

<h1>Update Produto <?php echo $model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>