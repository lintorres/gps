<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DiezmoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diezmos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diezmo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear diezmo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p class="pull-right">
        <?= Html::a('Generar PDF', ['generate'], ['class' => 'btn btn-primary']) ?>
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
             'attribute'=>'id_miembro',
             'value'=>'id_miembro',

            ],
            [
             'attribute'=>'n_diezmante',
             'value'=>'n_diezmante',

            ],
            [
             'attribute'=>'estado',
             'value'=>'estado',

            ],
             [
             'attribute'=>'fecha_recepcion',
             'value'=>'fecha_recepcion',

            ],
            // 'fecha_pago',
            // 'estado',
            // 'comprobante',
            // 'comision',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
