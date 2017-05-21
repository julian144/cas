<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Raza */

$this->title = 'Update Raza: ' . $model->idraza;
$this->params['breadcrumbs'][] = ['label' => 'Razas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idraza, 'url' => ['view', 'id' => $model->idraza]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="raza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
