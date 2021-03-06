<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengumuman';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    .pengum {
        border-width: 3px;
        border-radius: 6px;
        border-color: lightgrey;
        background-color: white;
        border-radius: 5px;
        box-shadow: 10px 10px #127487;
        padding: 17px 20px;
    }
</style>

<div class="pengumuman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="pengum">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'perihal',
                'isi:ntext',
                'tgl_pengumuman',

            ],
        ]); ?>
    </div>


</div>
