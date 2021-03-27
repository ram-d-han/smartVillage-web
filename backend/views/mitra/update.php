<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mitra */

$this->title = 'Update Mitra: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mitras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mitra-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
