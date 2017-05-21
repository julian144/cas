<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Empadre */

$this->title = 'Create Empadre';
$this->params['breadcrumbs'][] = ['label' => 'Empadres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empadre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
