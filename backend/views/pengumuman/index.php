<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengumuman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-index">

    <?php if (Yii::$app->user->identity->roles_id == 1) { ?>
        <p>
            <?= Html::a('Create Pengumuman', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } ?>

    <?php if (Yii::$app->user->identity->roles_id == 1) { ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'perihal',
                'isi:ntext',
                'tgl_pengumuman',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
    } ?>

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
