<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Miembro */

$this->title = 'Create Miembro';
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
