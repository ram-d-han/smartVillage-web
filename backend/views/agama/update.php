<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\agama */

$this->title = 'Update Agama: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Agamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agama-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
