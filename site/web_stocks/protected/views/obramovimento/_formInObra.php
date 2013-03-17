<?php
/* @var $this ObramovimentoController */
/* @var $model Obramovimento */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'obramovimento-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php $model->obraid = $ObraID; ?>
        <?php //echo $form->labelEx($model, 'obraid'); ?>
        <?php echo $form->hiddenField($model, 'obraid', array('type' => "hidden")); ?>
        <?php //echo $form->error($model, 'obraid'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'produtoid'); ?>
        <?php // echo $form->textField($model, 'produtoid'); ?>
        <?php
        echo $form->dropDownList($model, 'produtoid', CHtml::listData(Produto::model()->findAll(array('order' => 'nome')), 'idproduto', 'nome'), array('empty' => ''));
        ?>
        <?php echo $form->error($model, 'produtoid'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'descricao'); ?>
        <?php echo $form->textField($model, 'descricao', array('size' => 60, 'maxlength' => 3000)); ?>
        <?php echo $form->error($model, 'descricao'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'data'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'data',
            'language' => 'pt',
            'options' => array(
                'showOn' => 'both', // also opens with a button
                'dateFormat' => 'yy-mm-dd', // format of "2012-12-25"
                'showOtherMonths' => true, // show dates in other months
                'selectOtherMonths' => true, // can seelect dates in other months
                'changeYear' => true, // can change year
                'changeMonth' => true, // can change month
                'yearRange' => '2000:2099', // range of year
                'minDate' => '2000-01-01', // minimum date
                'maxDate' => '2099-12-31', // maximum date
                'showButtonPanel' => TRUE, // show button panel
            ),
            'htmlOptions' => array(
                'size' => '10', // textField size
                'maxlength' => '10', // textField maxlength
            ),
        ));
        ?>
        <?php echo $form->error($model, 'data'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Guardar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->