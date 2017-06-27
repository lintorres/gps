<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Ofrenda */

$this->title = 'Create Ofrenda';
$this->params['breadcrumbs'][] = ['label' => 'Ofrendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ofrenda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
