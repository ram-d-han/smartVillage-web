<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dusuns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dusun-index">

    <p>
        <?= Html::a('Create Dusun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama_dusun',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
