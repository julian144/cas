<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EspecrazaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Especrazas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especraza-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Especraza', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idespecraza',
            'especraza',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
