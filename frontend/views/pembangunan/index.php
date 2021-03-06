<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembangunan';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    .pemb {
        border-width: 3px;
        border-radius: 6px;
        border-color: lightgrey;
        background-color: white;
        border-radius: 5px;
        box-shadow: 10px 10px #127487;
        padding: 17px 20px;
        overflow-x: scroll;
    }
</style>

<div class="pembangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="pemb">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'nama_pembangunan',
                // 'foto',
                'anggaran',
                'tgl_mulai',
                'tgl_selesai',
                //'longitude',
                //'latitude',
                'keterangan',
                //'prosentase',
                //'sumber_dana_pembangunan_id',
                //'kategori_pembangunan_id',
                'status_pembangunan_id',
                //'user_id',
                'mitra_id',
                //'created_at',
                //'updated_at',

            ],
        ]); ?>
    
    <a class="pull-left" href="?r=lapor-progress%2Findex"><p class="btn btn-primary" style="color: white; padding: 7px 15px;">Progress Pembangunan</p></a>
    
    </div>
    



</div>
