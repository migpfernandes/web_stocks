<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs = array(
    'Obras' => array('index'),
    $model->codigo,
);

$this->menu = array(
    array('label' => 'Todas as obras', 'url' => array('index')),
    array('label' => 'Adicionar movimento', 'url' => array('/obramovimento/createInObra/ObraID/'.$model->idobra)),
    array('label' => 'Criar', 'url' => array('create')),
    array('label' => 'Atualizar', 'url' => array('update', 'id' => $model->idobra)),
    array('label' => 'Eliminar', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idobra), 'confirm' => 'Pretende eliminar a obra?')),
    array('label' => 'Adiministração', 'url' => array('admin')),
);
?>

<h1><?php echo $model->codigo; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idobra',
        'codigo',
        //'descricao',
        'datainicio',
        'datafim',
        'clienteid',
        array(
            'name' => 'descricao',
            'type' => 'html',
            'value' => $model->descricao,
        ),
    ),
));
?>

<?php

$columnsArray = array('ID','Descricao','Produto', 'Data');
$rowsArray = $model->GetLinhasArray();

$this->widget('ext.htmlTableUi.htmlTableUi',array(
		'collapsed'=>false,
		'editable'=>false,
		'enableSort'=>true,
		'exportUrl'=>'site/exportTable',
		'title'=>'Movimentos',
		//'subtitle'=>'Rev 1.3.3',
		'columns'=>$columnsArray,
		'rows'=>$rowsArray,
		//'footer'=>'Valor Total: ',
));
	
?>
