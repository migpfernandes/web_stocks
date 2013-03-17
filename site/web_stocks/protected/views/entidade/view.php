<?php
/* @var $this EntidadeController */
/* @var $model Entidade */

$this->breadcrumbs=array(
	'Entidades'=>array('index'),
	$model->nome,
);

$this->menu=array(
	array('label'=>'Todas as entidades', 'url'=>array('index')),
	array('label'=>'Criar', 'url'=>array('create')),
	array('label'=>'Atualizar', 'url'=>array('update', 'id'=>$model->identidade)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->identidade),'confirm'=>'Tem a certeza que pretende eliminar?')),
	array('label'=>'Administração', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'identidade',
		'codigo',
		'nome',
		'morada',
		'localidade',
		'codpostal',
		'telefone',
		'telemovel',
		'email',
		'site',
		'tipoentidade',
	),
)); ?>
