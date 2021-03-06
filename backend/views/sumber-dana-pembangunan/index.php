<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sumber Dana Pembangunans';
?>
<div class="sumber-dana-pembangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->identity->roles_id == 1) { ?>
        <p>
            <?= Html::a('Create Sumber Dana Pembangunan', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php } ?>

    <?php if (Yii::$app->user->identity->roles_id == 1) { ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'nama',
                'created_at',
                'updated_at',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
    } ?>

    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'nama',
                'created_at',
                'updated_at',

            ],
        ]); ?>

</div>
