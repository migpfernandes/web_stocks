<?php
/* @var $this MovimentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movimentos',
);

$this->menu=array(
	array('label'=>'Create Movimento', 'url'=>array('create')),
	array('label'=>'Manage Movimento', 'url'=>array('admin')),
);
?>

<h1>Movimentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
