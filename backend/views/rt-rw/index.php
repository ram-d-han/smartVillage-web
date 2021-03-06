<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rt Rws';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rt-rw-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rt Rw', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'rw_parent',
            'rt_child',
            'dusun_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
