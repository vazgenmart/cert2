<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Organizations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organizations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList(['Орган по сертификации' => 'Орган по сертификации', 'Испытательная лаборатория' => 'Испытательная лаборатория',], ['prompt' => '']) ?>

    <?= $form->field($model, 'sds')->dropDownList(['ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ' => 'ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ', 'ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ' => 'ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ', '100% ОРГАНИЧЕСКИЙ ПРОДУКТ' => '100% ОРГАНИЧЕСКИЙ ПРОДУКТ', 'ПОЖАРНЫЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ' => 'ПОЖАРНЫЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ',], ['prompt' => '', 'multiple' => 'multiple']) ?>

    <?= $form->field($model, 'accreditation_certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cert_created_date')->widget(DatePicker::classname(), [
        'options' => [
            'placeholder' => 'Cert created date ...',
            'value' => $model->cert_created_date ? $model->cert_created_date : date('Y-m-d'),
        ],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]) ?>

    <?= $form->field($model, 'cert_end_date')->widget(DatePicker::className(), [
        'options' => [
            'placeholder' => 'Cert end date ...',
            'value' => $model->cert_end_date ? $model->cert_end_date : date('Y-m-d'),
        ],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'is_valid')->dropDownList([
        '0' => 'Нет',
        '1' => 'Да'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
