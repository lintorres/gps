<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Miembro;
use yii\helpers\BaseArrayHelper

/* @var $this yii\web\View */
/* @var $model backend\models\Diezmo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diezmo-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'n_diezmante')->dropDownList(
          ArrayHelper::map(Miembro::find()->all(),'id','nombre'),
          ['prompt'=>'seleccionar miembro']
    )?>
    <?= $form->field($model, 'id_miembro')->textInput() ?>
    <?= $form->field($model, 'n_receptor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_recepcion')->textInput() ?>

    <?= $form->field($model, 'fecha_pago')->textInput() ?>

    <?= $form->field($model, 'estado')->dropDownList([ 'en pago' => 'En pago', 'pagado' => 'Pagado', 'recepcionado' => 'Recepcionado', ], ['prompt' => 'Seleccionar estado']) ?>

    <?= $form->field($model, 'file')->fileInput(); ?>
    <?= $form->field($model, 'monto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comision')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
