<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OfrendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ofrendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ofrenda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear ofrenda', ['create'], ['class' => 'btn btn-success']) ?>
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
             'attribute'=>'fecha_recepcion',
             'value'=>'fecha_recepcion',

            ],
            [
             'attribute'=>'tipo_ofrenda',
             'value'=>'tipo_ofrenda',

            ],
            [
             'attribute'=>'estado',
             'value'=>'estado',

            ],


            // 'fecha_pago',
            // 'comision',
            // 'tipo_ofrenda',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
