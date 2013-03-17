<?php
/* @var $this EntidadeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entidades',
);

$this->menu=array(
	array('label'=>'Criar', 'url'=>array('create')),
	array('label'=>'Administração', 'url'=>array('admin')),
);
?>

<h1>Entidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
