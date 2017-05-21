<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Empadre */

$this->title = $model->idempadre;
$this->params['breadcrumbs'][] = ['label' => 'Empadres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empadre-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idempadre], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idempadre], [
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
            'idempadre',
            'empadre',
        ],
    ]) ?>

</div>
