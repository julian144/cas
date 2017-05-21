<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Especraza */

$this->title = $model->idespecraza;
$this->params['breadcrumbs'][] = ['label' => 'Especrazas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especraza-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idespecraza], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idespecraza], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idespecraza',
            'especraza',
        ],
    ]) ?>

</div>
