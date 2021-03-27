<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporProgress */

$this->title = 'Update Lapor Progress: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lapor Progresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lapor-progress-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
