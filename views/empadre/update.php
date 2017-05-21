<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empadre */

$this->title = 'Update Empadre: ' . $model->idempadre;
$this->params['breadcrumbs'][] = ['label' => 'Empadres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idempadre, 'url' => ['view', 'id' => $model->idempadre]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empadre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
