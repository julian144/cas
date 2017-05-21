<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Registroanimal */

$this->title = 'Crear Registro de Arete';
$this->params['breadcrumbs'][] = ['label' => 'Busquedas y Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registroanimal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
