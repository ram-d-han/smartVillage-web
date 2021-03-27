<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lapor Progresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lapor-progress-index">

    <p>
        <?= Html::a('Create Lapor Progress', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                    'label' => 'image',
                    'format' => ['image',['width' => '250', 'height' => '200']],
                    'value' => function ($data) {
                        return $data->getImageUrl();
                    }
                ],
            'tanggal',
            'capaian_progress',
            'uraian_pekerjaan:ntext',
            //'pembangunan_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
