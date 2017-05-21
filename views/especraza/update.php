<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Especraza */

$this->title = 'Update Especraza: ' . $model->idespecraza;
$this->params['breadcrumbs'][] = ['label' => 'Especrazas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idespecraza, 'url' => ['view', 'id' => $model->idespecraza]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="especraza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
