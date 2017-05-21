<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistroanimalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registroanimal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?=// echo $form->field($model, 'idregistro') ?>

    <?= $form->field($model, 'noarete') ?>

    <?= $form->field($model, 'fechacoloc') ?>

    <?= $form->field($model, 'fechanac') ?>

    <?= $form->field($model, 'edad') ?>

    <?php $form->field($model, 'sexo') ?>

    <?php $form->field($model, 'raza') ?>

    <?php $form->field($model, 'especraza') ?>

    <?php $form->field($model, 'empadre') ?>

    <?php $form->field($model, 'madre') ?>
    <?php $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
