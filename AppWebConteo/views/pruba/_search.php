<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrubaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pruba-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'hora') ?>

    <?= $form->field($model, 'num_pasajeros') ?>

    <?= $form->field($model, 'dia') ?>

    <?= $form->field($model, 'mes') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
