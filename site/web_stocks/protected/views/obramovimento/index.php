<?php
/* @var $this ObramovimentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obramovimentos',
);

$this->menu=array(
	array('label'=>'Create Obramovimento', 'url'=>array('create')),
	array('label'=>'Manage Obramovimento', 'url'=>array('admin')),
);
?>

<h1>Obramovimentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
