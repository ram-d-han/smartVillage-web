<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Progress';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    .lapor {
        border-width: 3px;
        border-radius: 6px;
        border-color: lightgrey;
        background-color: white;
        border-radius: 5px;
        box-shadow: 10px 10px #127487;
        padding: 17px 20px;
    }
</style>

<div class="lapor-progress-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="lapor">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'image',
                'tanggal',
                'capaian_progress',
                'uraian_pekerjaan:ntext',
                //'pembangunan_id',
            ],
        ]); ?>
    </div>


</div>
