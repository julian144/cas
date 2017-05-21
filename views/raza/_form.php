<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Raza */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raza-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idraza')->textInput() ?>

    <?= $form->field($model, 'raza')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>