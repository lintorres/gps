<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DiezmoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diezmo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_miembro') ?>

    <?= $form->field($model, 'n_diezmante') ?>

    <?= $form->field($model, 'n_receptor') ?>

    <?= $form->field($model, 'fecha_recepcion') ?>

    <?php // echo $form->field($model, 'fecha_pago') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'comprobante') ?>

    <?php // echo $form->field($model, 'comision') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
