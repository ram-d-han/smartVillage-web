<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengumuman */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pengumumen', 'url' => ['index']];
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

<div class="pengumuman-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="view">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'perihal',
                'isi:ntext',
                'tgl_pengumuman',
            ],
        ]) ?>
    </div>

</div>
