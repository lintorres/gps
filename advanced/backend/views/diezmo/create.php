<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Diezmo */

$this->title = 'Create Diezmo';
$this->params['breadcrumbs'][] = ['label' => 'Diezmos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diezmo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
