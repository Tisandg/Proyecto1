<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pruba */

$this->title = 'Create Pruba';
$this->params['breadcrumbs'][] = ['label' => 'Prubas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pruba-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
