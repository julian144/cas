<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Sexo;
use app\models\Raza;
use app\models\Especraza;
use app\models\Empadre;
use app\models\Estado;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistroanimalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Busquedas y Reportes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registroanimal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Registro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            //'idregistro',
            'noarete',
            'fechacoloc',
            'fechanac',
            'edad',
            [
    'attribute'=>'sexo',
    'filter'=>ArrayHelper::map(Sexo::find()->asArray()->all(), 'sexo', 'sexo'),
],

            [
    'attribute'=>'raza',
    'filter'=>ArrayHelper::map(raza::find()->asArray()->all(), 'raza', 'raza'),
],

            [
    'attribute'=>'especraza',
    'filter'=>ArrayHelper::map(especraza::find()->asArray()->all(), 'especraza', 'especraza'),
],
[
'attribute'=>'empadre',
'filter'=>ArrayHelper::map(empadre::find()->asArray()->all(), 'empadre', 'empadre'),
],
            'madre',
            [
    'attribute'=>'estado',
    'filter'=>ArrayHelper::map(estado::find()->asArray()->all(), 'estado', 'estado'),
],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
