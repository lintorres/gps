<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MiembroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Miembros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear miembro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
             'attribute'=>'id',
             'value'=>'id',

            ],
            [
             'attribute'=>'nombre',
             'value'=>'nombre',

            ],
            [
             'attribute'=>'f_nacimiento',
             'value'=>'f_nacimiento',

            ],
            [
             'attribute'=>'f_ingreso',
             'value'=>'f_ingreso',

            ],
            [
             'attribute'=>'correo',
             'value'=>'correo',

            ],
            // 'tipo',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
