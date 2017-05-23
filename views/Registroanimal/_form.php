<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Sexo;
use app\models\Raza;
use app\models\Especraza;
use app\models\Empadre;
use app\models\Estado;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Registroanimal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registroanimal-form" >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noarete')->textInput(['maxlength'=>10,'style'=>'width:250px']); ?>



    <?= $form->field($model, 'fechacoloc')->textInput(['maxlength'=>18,'style'=>'width:250px']);?>

    <?= $form->field($model, 'fechanac')->textInput(['maxlength'=>18,'style'=>'width:250px']) ?>

    <?= $form->field($model, 'edad')->textInput(['maxlength' => true,'style'=>'width:250px']); ?>


    <?= $form->field($model, 'sexo')->dropDownList(
      ArrayHelper::map(sexo::find()->all(),'sexo','sexo'),
      ['prompt'=>'---Seleccionar Sexo---','style'=>'width:250px']
      )?>

      <?= $form->field($model, 'raza')->dropDownList(
        ArrayHelper::map(raza::find()->all(),'raza','raza'),
        ['prompt'=>'---Seleccionar Raza---','style'=>'width:250px']
        )?>

        <?= $form->field($model, 'especraza')->dropDownList(
          ArrayHelper::map(especraza::find()->all(),'especraza','especraza'),
          ['prompt'=>'---Seleccionar Raza Especifica---','style'=>'width:250px']
          )?>

          <?= $form->field($model, 'empadre')->dropDownList(
            ArrayHelper::map(empadre::find()->all(),'empadre','empadre'),
            ['prompt'=>'---Seleccionar Empadre---','style'=>'width:250px']
            )?>
    <?= $form->field($model, 'madre')->textInput(['maxlength'=>10,'style'=>'width:250px']) ?>
    <?= $form->field($model, 'estado')->dropDownList(
      ArrayHelper::map(estado::find()->all(),'estado','estado'),
      ['prompt'=>'---Seleccionar Estado del Animal---','style'=>'width:250px']
      )?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear Registro' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
