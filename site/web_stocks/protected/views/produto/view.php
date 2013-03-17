<?php
/* @var $this ProdutoController */
/* @var $model Produto */

$this->breadcrumbs = array(
    'Produtos' => array('index'),
    $model->nome,
);

$this->menu = array(
    array('label' => 'Todos os produtos', 'url' => array('index')),
    array('label' => 'Criar', 'url' => array('create')),
    array('label' => 'Atualizar', 'url' => array('update', 'id' => $model->idproduto)),
    array('label' => 'Eliminar', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idproduto), 'confirm' => 'Tem a certeza que pretende eliminar este produto?')),
    array('label' => 'Adminitração', 'url' => array('admin')),
);
?>

<h1><?php echo $model->nome; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idproduto',
        'fornecedorid',
        'doccompra',
        'nome',
        //'descricao',
        'unidade',
        'quantidade',
        'precoUnit',
        'precototal',
        array(
            'name' => 'descricao',
            'type' => 'html',
            'value' => $model->descricao,
        ),
    ),
));
?>
