<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\LaporProgress */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lapor Progresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lapor-progress-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'image',
            'tanggal',
            'capaian_progress',
            'uraian_pekerjaan:ntext',
            'pembangunan_id',
        ],
    ]) ?>

</div>
