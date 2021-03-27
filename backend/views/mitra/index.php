<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mitras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mitra-index">

    <?php if (Yii::$app->user->identity->roles_id == 1) { ?>
        <p>
            <?= Html::a('Create Mitra', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } ?>

    <?php if (Yii::$app->user->identity->roles_id == 1) { ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'nama_mitra',
                'alamat:ntext',
                'no_telp',
                'email:email',
                //'user_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
    } ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'nama_mitra',
                'alamat:ntext',
                'no_telp',
                'email:email',
                //'user_id',

            ],
        ]); ?>


</div>
