<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pruba */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Prubas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pruba-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fecha',
            'hora',
            'num_pasajeros',
            'dia',
            'mes',
            'id',
        ],
    ]) ?>

</div>
