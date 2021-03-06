<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pembangunan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<style type="text/css">
    .view {
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

<div class="pembangunan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="view">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'nama_pembangunan',
                'foto',
                'anggaran',
                'tgl_mulai',
                'tgl_selesai',
                'longitude',
                'latitude',
                'keterangan',
                'prosentase',
                'sumber_dana_pembangunan_id',
                'kategori_pembangunan_id',
                'status_pembangunan_id',
                'user_id',
                'mitra_id',
                'created_at',
                'updated_at',
            ],
        ]) ?>
    </div>

</div>
