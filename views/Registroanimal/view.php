<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Registroanimal */

$this->title = $model->idregistro;
$this->params['breadcrumbs'][] = ['label' => 'Búsqueda y reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registroanimal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idregistro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idregistro], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro que deseas eliminarlo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            /*'idregistro',*/
            'noarete',
            'fechacoloc',
            'fechanac',
            'edad',
            'sexo',
            'raza',
            'especraza',
            'empadre',
            'madre',
            'estado',
        ],
    ]) ?>

</div>
