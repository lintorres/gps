<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Miembro;
use yii\helpers\BaseArrayHelper
/* @var $this yii\web\View */
/* @var $model backend\models\Ofrenda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ofrenda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_miembro')->textInput() ?>

    <?= $form->field($model, 'n_ofrendante')->dropDownList(
          ArrayHelper::map(Miembro::find()->all(),'id','nombre'),
          ['prompt'=>'seleccionar Miembro']
    )?>
    <?= $form->field($model, 'n_receptor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_recepcion')->textInput() ?>

    <?= $form->field($model, 'fecha_pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_ofrenda')->dropDownList([ 'especial' => 'Especial', 'normal' => 'Normal', ], ['prompt' => 'Seleccionar tipo ofrenda']) ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'en pago' => 'En pago', 'pagado' => 'Pagado', 'recepcionado' => 'Recepcionado', ], ['prompt' => 'Seleccionar estado de pago']) ?>
    
     <?= $form->field($model, 'file')->fileInput(); ?>
     
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
