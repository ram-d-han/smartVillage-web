<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dusun */

$this->title = 'Update Dusun: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dusuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dusun-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
