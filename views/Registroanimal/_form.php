<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Sexo;
use app\models\Raza;
use app\models\Especraza;
use app\models\Empadre;
use app\models\Estado;
/* @var $this yii\web\View */
/* @var $model app\models\Registroanimal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registroanimal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noarete')->textInput() ?>

    <?= $form->field($model, 'fechacoloc')->textInput() ?>

    <?= $form->field($model, 'fechanac')->textInput() ?>

    <?= $form->field($model, 'edad')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'sexo')->dropDownList(
      ArrayHelper::map(sexo::find()->all(),'sexo','sexo'),
      ['prompt'=>'---Seleccionar Sexo---']
      )?>

      <?= $form->field($model, 'raza')->dropDownList(
        ArrayHelper::map(raza::find()->all(),'raza','raza'),
        ['prompt'=>'---Seleccionar Raza---']
        )?>

        <?= $form->field($model, 'especraza')->dropDownList(
          ArrayHelper::map(especraza::find()->all(),'especraza','especraza'),
          ['prompt'=>'---Seleccionar Raza Especifica---']
          )?>

          <?= $form->field($model, 'empadre')->dropDownList(
            ArrayHelper::map(empadre::find()->all(),'empadre','empadre'),
            ['prompt'=>'---Seleccionar Empadre---']
            )?>
    <?= $form->field($model, 'madre')->textInput() ?>
    <?= $form->field($model, 'estado')->dropDownList(
      ArrayHelper::map(estado::find()->all(),'estado','estado'),
      ['prompt'=>'---Seleccionar Estado del Animal---']
      )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear Registro' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
