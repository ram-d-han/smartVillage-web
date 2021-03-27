<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pembangunan */

$this->title = 'Update Pembangunan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pembangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembangunan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
