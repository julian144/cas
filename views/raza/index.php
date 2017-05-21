<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RazaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Razas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raza-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Raza', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idraza',
            'raza',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>