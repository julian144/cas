<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Registroanimal */

$this->title = 'Actualizar el número de arete: ' . $model->noarete;
$this->params['breadcrumbs'][] = ['label' => 'Búsqueda y reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idregistro, 'url' => ['view', 'id' => $model->idregistro]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="registroanimal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
