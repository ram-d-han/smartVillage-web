<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\pekerjaan */

$this->title = 'Update Pekerjaan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pekerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pekerjaan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
