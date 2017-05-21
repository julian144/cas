<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmpadreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empadres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empadre-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Empadre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idempadre',
            'empadre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
