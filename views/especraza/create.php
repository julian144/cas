<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Especraza */

$this->title = 'Create Especraza';
$this->params['breadcrumbs'][] = ['label' => 'Especrazas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especraza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
