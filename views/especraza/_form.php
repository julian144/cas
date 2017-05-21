<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Especraza */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="especraza-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idespecraza')->textInput() ?>

    <?= $form->field($model, 'especraza')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
