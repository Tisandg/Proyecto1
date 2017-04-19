<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrubaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prubas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pruba-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pruba', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fecha',
            'hora',
            'num_pasajeros',
            'dia',
            'mes',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
