<?php
/* @var $this ObramovimentoController */
/* @var $model Obramovimento */

$this->breadcrumbs=array(
	'Obra'=>array('obra/'.$ObraID),
	'Create',
);

$this->menu=array(
	array('label'=>'Obra', 'url'=>array('/obra/'.$ObraID)),
	array('label'=>'Administração dos movimentos', 'url'=>array('admin')),
);
?>

<h1>Adicionar movimento à obra</h1>

<?php echo $this->renderPartial('_formInObra', array('model'=>$model, 'ObraID'=>$ObraID)); ?>