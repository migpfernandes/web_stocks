<?php
/* @var $this ObraController */
/* @var $model Obra */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'obra-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'codigo'); ?>
        <?php echo $form->textField($model, 'codigo', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'codigo'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'datainicio'); ?>
        <?php //echo $form->textField($model, 'datainicio'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'datainicio',
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

        <div class="row">
            <?php echo $form->labelEx($model, 'datafim'); ?>
            <?php //echo $form->textField($model, 'datafim'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'datafim',
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
            <?php echo $form->error($model, 'datafim'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'clienteid'); ?>
            <?php //echo $form->textField($model, 'clienteid'); ?>
            <?php
            echo $form->dropDownList($model, 'clienteid', CHtml::listData(Entidade::model()->findAll(array("condition" => "tipoentidade='C'", 'order' => 'nome')), 'identidade', 'nome'), array('empty' => ''));
            ?>
            <?php echo $form->error($model, 'clienteid'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'descricao'); ?>
            <?php // echo $form->textField($model, 'descricao', array('size' => 60, 'maxlength' => 4000)); ?>
            <?php
            $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model' => $model,
                'attribute' => 'descricao',
                'config' => array(
                //
                ),
            ));
            ?>

            <?php echo $form->error($model, 'descricao'); ?>
        </div>

        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->